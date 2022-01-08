<?php

use Illuminate\Support\Facades\Route;

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
Route::get('Railroad',[FrontController::class,'Railroad'])->name('Railroad.Page');

//首頁
Route::get('/',[FrontController::class,'index'])->name('index');


// //最新消息
// Route::prefix('news')->group(function(){
//     Route::get('/',[Controller::class,'newsList'])->name('news.list');
//     Route::get('/{id}',[Controller::class,'newsContent'])->name('news.content');
// });


// //沿途景點
// Route::prefix('attractions')->group(function(){
//     Route::get('/',[Controller::class,'attractionsList'])->name('attractions.list');
//     Route::get('/{id}',[Controller::class,'attractionsContent'])->name('attractions.content');
// });


// //鄰近商店
// Route::prefix('Stores')->group(function(){
//     Route::get('/',[Controller::class,'StoresList'])->name('stores.list');
//     Route::get('/{id}',[Controller::class,'StoresContent'])->name('stores.content');
// });

// //揪一起騎




// //服務中心
// Route::prefix('Contacts')->group(function(){
//     Route::get('/',[FrontController::class,'ContactsList'])->name('contacts.list');

// });




// //會員系統
// Route::get('/home', [HomeController::class, 'index'])->name('home');


// //揪一起騎

// Route::prefix('/team')->group(function(){
//     Route::get('/',[Controller::class,'index'])->name('team.index')

// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('/admin')->group(function(){
    
    // Route::prefix('/news')->group(function(){
    //     Route::get('/',[NewsController::class,'index'])->name('news.index');
    //     Route::get('/create',[NewsController::class,'create'])->name('news.create');
    //     Route::post('/store',[NewsController::class,'store'])->name('news.store');
    //     Route::get('/{id}/edit',[NewsController::class,'edit'])->name('news.edit');
    //     Route::patch('/{id}',[NewsController::class,'update'])->name('news.update');
    //     Route::delete('/{id}',[NewsController::class,'destroy'])->name('news.destroy');

    // });
});

