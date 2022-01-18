<?php

namespace App\Http\Controllers;

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
