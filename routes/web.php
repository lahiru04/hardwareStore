<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

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


Route::post('registerUser', [CustomAuthController::class, 'customSignup'])->name('customSignup');

Route::get('/', [CustomAuthController::class, 'index'])->name('customSignin');
Route::post('sign-in', [CustomAuthController::class, 'signinProcess'])->name('customSign-in');
Route::post('logout', [CustomAuthController::class, 'signOut'])->name('logout');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::group(['middleware' => ['auth']], function () {

    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('loadAllProducts', [ProductController::class, 'loadAllProducts'])->name('loadAllProducts');
    Route::get('productlist', [ProductController::class, 'index'])->name('productlist');
    Route::get('insertProduct', [ProductController::class, 'insertProduct'])->name('insertProduct');
    Route::get('addproduct', [ProductController::class, 'addproduct'])->name('addproduct');
    Route::get('product-details', [ProductController::class, 'productDetails'])->name('product-details');

    /*  Route::get('insertProduct', [ProductController::class, 'insertProduct'])->name('insertProduct');


      Route::get('/product-details', function () {
      return view('product-details');
      })->name('product-details');

      Route::get('/', function () {
      return view('index');
      })->name('index');

      Route::get('/index', function () {
      return view('index');
      })->name('index');

      Route::get('/productlist', function () {
      return view('productlist');
      })->name('productlist');

      Route::get('/addproduct', function () {
      return view('addproduct');
      })->name('addproduct');

      Route::get('/categorylist', function () {
      return view('categorylist');
      })->name('categorylist');

      Route::get('/sample', function () {
      return view('sample');
      })->name('sample'); */
});

