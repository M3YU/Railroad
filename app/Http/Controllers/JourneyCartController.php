<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Store;
use App\Models\Attraction;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class JourneyCartController extends Controller
{
    public function add(Request $request)
    {
        if ($request->type == 'stores') {
            $product = Store::find($request->id);
            $product_id = '2'.Str::padLeft($product->category_id, 2, '0').Str::padLeft($product->id, 3, '0');
            $category_name = $product->storeCategory->name;
            $content = '';
            $address = $product->address;
        } else if ($request->type == 'attractions') {
            $product = Attraction::find($request->id);
            $product_id = '1'.Str::padLeft($product->category_id, 2, '0').Str::padLeft($product->id, 3, '0');
            $category_name = $product->attractionCategory->name;
            $content = Str::limit($product->content, 40);
            $address = '';
        } else {

        }

        if (!\Cart::get($product_id)) {
            \Cart::add(array(
                'id' => $product_id,
                'name' => $product->name,
                'price' => $product->distance,
                'quantity' => $request->qty,
                'attributes' => array(
                    'image_url' => $product->image_url,
                    'direction' => $product->direction,
                    'category' => $category_name,
                    'content' => $content ?: $address
                )
            ));
        }
        
        return 'Success';
    }

    public function delete(Request $request) {
        \Cart::remove($request->id);
        return 'Success';
    }

    public function step01Store(Request $request)
    {
        $items = \Cart::getContent();
        $spots = ['spots' => []];

        foreach ($items as $key => $item) {
            $type = (Str::substr($item->id, 0, 1) == '1') ? 'attractions' : 'stores';
            $category = (string)Str::of(Str::substr($item->id, 1, 2))->ltrim('0');
            $id = (string)Str::of(Str::substr($item->id, 3, 3))->ltrim('0');

            $spots['spots'][$key] = [
                'type' => $type,
                'category' => $category,
                'id' => $id
            ];
        }

        Order::create([
            'user_id' => 1, //未確認會員邏輯，暫寫1
            'spots' => $spots,
            'name' => $request->name
        ]);

        \Cart::clear();
        return redirect()->route('members');

        // return view('front.member.index');
    }

    public function clear() {
        \Cart::clear();
        return 'clear Success';
    }

    public function content()
    {
        $cartCollection = \Cart::getContent();
        dd($cartCollection);
    }
}
