<?php

use App\Http\Controllers\PageController;
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
    return view('welcome');
});

Route::get('/index', [PageController::class, 'getIndex'])->name('index');

Route::get('/loaiSp', [PageController::class, 'getLoaiSp'])->name('loaisp');

Route::get('/chitietSp/{id}', [PageController::class, 'getChitietSp'])->name('chitietsp');

Route::get('/login', [PageController::class, 'getLogin'])->name('login');

Route::get('/signin', [PageController::class, 'getSignin'])->name('signin');
//tìm kiếm
Route::get('/search', [PageController::class, 'getSearch'])->name('search');

Route::get('/add-to-cart/{id}', [PageController::class, 'getAddtoCart'])->name('add-to-cart');

Route::get('/del-cart/{id}', [PageController::class, 'getDelItemCart'])->name('del-cart');

Route::post('/login', [PageController::class, 'postLogin']);
Route::post('/signin', [PageController::class, 'postSignin']);
