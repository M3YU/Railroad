<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\StoreCategoryController;
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


//形象頁
Route::get('bike', [FrontController::class, 'bike'])->name('bike.Page');

// //首頁
Route::get('/', [FrontController::class, 'index'])->name('index');

Route::get('/news', [FrontController::class, 'news'])->name('news');


//沿途景點
Route::get('/attractions', [FrontController::class, 'attraction'])->name('attractions');

Route::get('/attractions/suit', [FrontController::class, 'attractionSuit'])->name('attractions.suit');

Route::get('/attractions/{id}', [FrontController::class, 'attractionContent'])->name('attractions.content');

Route::get('/members', [FrontController::class, 'member'])->name('members');

//鄰近商店
Route::get('/stores', [FrontController::class, 'store'])->name('stores');

Route::get('/stores/{id}', [FrontController::class, 'storeContent'])->name('stores.content');

//揪一起騎
Route::get('/teams', [FrontController::class, 'teams'])->name('teams');
//服務中心
Route::get('/services', [FrontController::class, 'service'])->name('services');
Route::post('services-contact', [FrontController::class, 'contact'])->name('contact.mail');


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




Route::prefix('/contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ContactController::class, 'contact'])->name('contact.email');
});



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


Route::prefix('/admin')->middleware(['auth'])->group(function () {
    //沿途景點
    Route::resource('/attractions', AttractionController::class);
    Route::resource('/attraction_categories', AttractionCategoryController::class);

    Route::delete('/attraction_image', [AttractionController::class, 'imageDelete'])->name('attraction.image_delete');

    Route::resource('/stores', StoreController::class);
    Route::resource('/store_categories', StoreCategoryController::class);
    Route::delete('/store_image', [StoreController::class, 'storesimageDelete'])->name('stores.image-delete');
    Route::resource('/news_categories', NewsCategoryController::class);

    Route::prefix('/news')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('news.index');
        Route::get('/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('/', [NewsController::class, 'store'])->name('news.store');
        Route::get('/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
        Route::patch('/{news}', [NewsController::class, 'update'])->name('news.update');
        Route::delete('/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
    });
});


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
