<?php

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
Route::get('test', function () {
    return view('home.index');
});
Route::get('Suppliers/indexCustomer', function () {
    return view('Suppliers.indexCustomer');
});

Route::get('Categories/indexCustomer', function () {
    return view('Categories.indexCustomer');
});

Route::get('Suppliers/','SupplierController@index');

Route::get('Suppliers/Create','SupplierController@Create');

Route::post('Suppliers/Create','SupplierController@CreatePost');

Route::get('Categories/','CategoryController@index');

Route::get('Categories/Create','CategoryController@Create');

Route::post('Categories/Create','CategoryController@CreatePost');

Route::get('Souvenirs/','SouvenirController@index');

Route::get('Souvenirs/Create','SouvenirController@Create');

Route::post('Souvenirs/Create','SouvenirController@CreatePost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('emails/test','EmailController@sendEmail');

Route::get('Contact/',function (){
    return view('Contact');
});

Route::get('About/',function (){
    return view('About');
});
Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//用户验证
Auth::routes();
Route::get('/home', 'HomeController@index')
    ->name('home');
Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');





Route::resource('carts', 'CartsController', ['only' => ['index', 'store','destroy']]);



//Route::get('carts-empty', 'CartsController@index');

Route::post('carts-empty', 'CartsController@empty_carts');



Route::post('carts-update', 'Cartscontroller@update');