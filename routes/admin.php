<?php

Route::get('/home','HomeController@index')->name('index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

