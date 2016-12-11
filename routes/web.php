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
    return view('goods.goods');
});





//Route::any('/admin/users', 'Admin\Users\UsersController@index');
//Route::get('/admin/users/{id}/edit','Admin\Users\UsersController@edit');
//Route::post('/admin/users/{uuid}/update','Admin\Users\UsersController@update');
//Route::any('/admin/users/{uuid}/del','Admin\Users\UsersController@del');
//Route::any('/admin/users/add','Admin\Users\UsersController@add');
//Route::any('/admin/users/isAdd','Admin\Users\UsersController@isAdd');
//
//Route::get('/admin', function () {
//    return view('admin.login');
//});

Route::resource('/login', 'Admin\LoginController');
Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
    Route::resource('show', 'Admin\AdminController');
    Route::resource('users', 'Admin\Users\UsersController');
    Route::resource('goods', 'Admin\Goods\GoodsController');
    Route::resource('goodsclass', 'Admin\Goods\GoodsClassController');
    Route::resource('credit', 'Admin\Credit\CreditController');
    Route::resource('money', 'Admin\Money\MoneyController');
    Route::resource('tags', 'Admin\Tags\TagsController');
    });


//Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
//    Route::any('show',  'Admin\AdminController');
//    Route::resource('users', 'Admin\Users\UsersController');
//    Route::resource('goods', 'Admin\Goods\GoodsController');
//    Route::resource('goodsclass', 'Admin\Goods\GoodsClassController');
//    Route::resource('credit', 'Admin\Credit\CreditController');
//    Route::resource('money', 'Admin\Money\MoneyController');
//});


//Route::get('/admin/goods',function (){
//    return view('admin/goods/index');
//});

