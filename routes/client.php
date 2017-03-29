<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('client')->user();

    //dd($users);

    return view('client.home');
})->name('home');
Route::get('/products', 'ClientController@index');
Route::get('/counts/{id}', 'ClientController@selections');
Route::get('/inquiries', 'InquiriesController@index');
Route::get('/investments', 'ClientController@investment');
Route::get('/show/{id}', 'ClientController@show');
Route::get('search', 'ClientController@search');
Route::post('store', 'InquiriesController@store');
Route::get('myinquiries', 'InquiriesController@myinquiries');
Route::get('show/inquiries/{inquiry}','InquiriesController@show');
Route::get('replies','InquiriesController@replies');
Route::get('investsearch','ClientController@investsearch');
