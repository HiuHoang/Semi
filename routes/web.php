<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\RouteGroup;
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

// Route::get('/', function () {
//     return view('user.home');
// });
Route::group(['prefix' => 'user'], function () {
    Route::post('/logout', [MyController::class, 'getlogout'])->name('logout');
    Route::get('/login', [MyController::class, 'getLogin'])->name('login');
    Route::post('/login', [MyController::class, 'postLogin']);
    Route::get('/register', [MyController::class, 'getRegister'])->name('register');
    Route::post('/register', [MyController::class, 'postRegister']);
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [MyController::class, 'getadminpage'])->name('dashboard');
    Route::get('/manage', [MyController::class, 'getAllUser'])->name('manage');
    Route::get('deleteUser/{id}', [MyController::class, 'deleteUser'])->name('deleteUser');
    Route::get('editUser/{id}', [MyController::class, 'getEditUser'])->name('editUser');
    Route::post('editUser/{id}', [MyController::class, 'postEditUser'])->name('posteditUser');
    Route::get('/manageProduct', [ProductController::class, 'getAllProduct'])->name('manageProduct');
    Route::get('deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
    Route::get('editProduct/{id}', [ProductController::class, 'getEditProduct'])->name('editProduct');
    Route::post('editProduct/{id}', [ProductController::class, 'postEditProduct'])->name('posteditProduct');
    Route::get('/newproduct', [ProductController::class, 'getInsertProduct'])->name('insert');
    Route::post('/newproduct', [ProductController::class, 'postInsertProduct']);
});
Route::group(['prefix' => 'cart'], function () {
    Route::get('/cart', [HomeController::class, 'getcart'])->name('cart');
    Route::get('/add/{id}', [MyController::class, 'getAddCart'])->name('addCart');
    Route::get('/delete/{id}', [MyController::class, 'getDeleteCart'])->name('deleteCart');
    Route::get('/update/{id}', [MyController::class, 'getUpdateCart'])->name('updateCart');
});
Route::group(['prefix' => 'home'], function () {
    Route::get('/home', [HomeController::class, 'gethome'])->name('home');
    Route::get('/shop', [HomeController::class, 'getshop'])->name('shop');
    Route::get('/shopdetail/{id}', [HomeController::class, 'getshopdetail'])->name('shopdetail');
    Route::get('/blog', [HomeController::class, 'getblog'])->name('blog');
    Route::get('/contact', [HomeController::class, 'getcontact'])->name('contact');
});
