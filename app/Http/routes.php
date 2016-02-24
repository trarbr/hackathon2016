<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('frontpage', function () {
    return view('pages.index');
});

Route::post('/subscribe', 'NewsletterController@subscribe');
Route::get('/unsubscribe/{email}', 'NewsletterController@unsubscribe');

Route::get('map', function () {
    return view('pages.map');
});