<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\productcontroller;

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

Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    return 'NIM : 1941720110 - Nama : Auzan Ihtifazhuddin';
});

Route::get('/artikel/{id}', function ($id) {
    return 'Halaman Artikel dengan ID :' .$id;
});

///Praktikum 2
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'artikel']);

//Praktikum 3
///1.Menampilkan halaman awal web
// Route::get('/', [ProductController::class, 'index']);
// Route::prefix('product')->group(function () {
//     Route::get('/', [ProductController::class, 'product']);
//     Route::get('/edugame', [ProductController::class, 'edugame']);
//     Route::get('/kidgame', [ProductController::class, 'kidgame']);
//     Route::get('/storybook', [ProductController::class, 'storybook']);
//     Route::get('/kidsongs', [ProductController::class, 'kidsongs']);
// });
// Route::get('/News/{id}', [ProductController::class, 'News']);
// Route::prefix('program')->group(function () {
//     Route::get('/', [ProductController::class, 'program']);
//     Route::get('/karir', [ProductController::class, 'karir']);
//     Route::get('/magang', [ProductController::class, 'magang']);
//     Route::get('/industri', [ProductController::class, 'industri']);

// });
// Route::get('/AboutUs', [ProductController::class, 'AboutUs']);

// Route::resource('Contact', ContactController::class)->only([
//     'index'
// ]);