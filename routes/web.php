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

Route::get('/','ClientController@products' );

Auth::routes();

Route::get('/home', 'HomeController@product');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/products','AdminController@products');
Route::get('/admin/categories','AdminController@categories');
Route::post('/admin/categories/store','CategoryController@store');
Route::post('/admin/product/store','ProductController@store');
Route::get('/admin/products/view','ProductController@index');

Route::group(['prefix' => 'client'], function () {
  Route::get('/login', 'ClientAuth\LoginController@showLoginForm');
  Route::post('/login', 'ClientAuth\LoginController@login');
  Route::post('/logout', 'ClientAuth\LoginController@logout');

  Route::get('/register', 'ClientAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'ClientAuth\RegisterController@register');

  Route::post('/password/email', 'ClientAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'ClientAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'ClientAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'ClientAuth\ResetPasswordController@showResetForm');

});

Route::get('/admin/products/edit_{id}','ProductController@edit');
Route::post('/admin/products/post/{id}','ProductController@update');
Route::get('/admin/reports','ProductController@reports');
Route::get('/admin/analytics','ProductController@analytics');
Route::get('/admin/clients','ProductController@clients');






