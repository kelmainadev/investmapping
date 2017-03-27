<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('client')->user();

    //dd($users);

    return view('client.home');
})->name('home');
Route::get('/products', 'ClientController@index');
Route::get('/counts/{id}','ClientController@selections');
Route::get('/enquiries','ClientController@enquiries');
Route::get('/investments','ClientController@investment');
Route::get('/show/{id}','ClientController@show');
Route::get('search','ClientController@search');