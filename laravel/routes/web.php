<?php

use App\Http\Controllers\admin\AddproductController;
use App\Http\Controllers\ProductController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::view('contact-us', 'contact-us');
Route::view('admin/add-product', 'admin/add-product');
Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('home', [ProductController::class, 'index'])->name('home');
Route::post('add', [AddproductController::class, 'add'])->name('add');
Route::get('shop', [ProductController::class, 'shop'])->name('shop');

Route::middleware(['auth'])->group(function () {
    Route::get('cart', [ProductController::class, 'cat' ])->name('cart');
    Route::get('add-cart/{id}', [ProductController::class, 'addcat'])->name('add-cart');

});
