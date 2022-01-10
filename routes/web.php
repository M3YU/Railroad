<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\AttractionCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// //形象頁
// Route::get('railroad', [FrontController::class, 'railroad'])->name('Railroad.Page');

// //首頁
// Route::get('/', [FrontController::class, 'index'])->name('index');


// //沿途景點
// Route::resource('/attractions', AttractionController::class);

// //景點分類
// Route::resource('/attraction-categories', AttractionCategoryController::class);


// //鄰近商店
// Route::resource('/stores', StoreController::class);


// //揪一起騎
// Route::resource('/teams', TeamController::class);

// //揪成會員(已定義)

// Route::prefix('/user')->group(function () {
//     Route::get('/', [Controller::class, 'index'])->name('user.index');
//     Route::get('/create', [Controller::class, 'create'])->name('user.create');
//     Route::post('/store', [Controller::class, 'store'])->name('user.store');
//     Route::get('/{id}/edit', [Controller::class, 'edit'])->name('user.edit');
//     Route::patch('/{id}', [Controller::class, 'update'])->name('user.update');
// });

// //行程(未定義)
// Route::resource('/journey', Controller::class);



// //服務中心
// Route::prefix('Contacts')->group(function () {
//     Route::get('/', [ContactController::class, 'ContactsList'])->name('contacts.list');
// });



// //最新消息
// Route::resource('/news', NewController::class);

// //會員行程(未定義)
// Route::resource('/uese-itinerary', Controller::class);

// // 自訂行程
// Route::resource('/Member-itinerary', Controller::class);



// //上面前台


// //////////////////////////////////////////////////////////// //
// 先處理這個
//下面後台


Route::prefix('/admin')->group(function () {
    //沿途景點
    Route::resource('/attractions', AttractionController::class);
    Route::resource('/attraction_categories', AttractionCategoryController::class);
    
    Route::resource('/stores', StoreController::class);
    Route::resource('/store-categories', StoreCategoryController::class);
    Route::delete('/attraction_image',[AttractionController::class,'imageDelete'])->name('attraction.image-delete');
});


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
