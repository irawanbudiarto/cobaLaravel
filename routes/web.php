<?php

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/organic', function () {
//     return view('organic');
// });

// Route::get('/foods', function () {
//     return view('foods');
// });

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', 'PagesController@home');
Route::get('/organic', 'PagesController@organic');
Route::get('/foods', 'PagesController@foods');
Route::get('/about', 'PagesController@about');

Route::get('/member', 'MemberController@index');
