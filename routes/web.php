<?php
use App\Number;

Route::get('/','QoteController@index')->name('index');

Route::get('/profile/{person}', 'QoteController@show');

Route::post('/profile','QoteController@store');

Route::post('/profile/{person}/add','QoteController@add');

Route::get('/delete/{number}','QoteController@sub');