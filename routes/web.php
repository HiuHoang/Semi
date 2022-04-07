<?php

use App\Http\Controllers\MyController;
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

Route::get('/', function () {
    return view('user.home');
});
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
});
