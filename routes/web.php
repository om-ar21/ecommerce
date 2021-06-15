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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', "ProductController@index")->name('home');
Route::get('/article/{slug}', 'ProductController@article')->name('article');
Route::get('/subcategory/{id}','ProductController@subcategory')->name('by_sub_cat');
Route::get('/cart','ProductController@cart')->name('cart');
Route::post('/add','ProductController@add')->name('add');
Route::post('/change','ProductController@change')->name('change');
Route::delete('/delete','ProductController@delete')->name('delete');





// Route::get('/panier', function () {
//     return view('panier');
// });

