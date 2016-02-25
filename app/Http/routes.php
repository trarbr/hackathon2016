<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('frontpage', function () {
    return view('pages.index');
});

Route::get('map', function () {
    return view('pages.map');
});


Route::post('/subscribe', 'NewsletterController@subscribe');
Route::get('/unsubscribe/{email}', 'NewsletterController@unsubscribe');

Route::group(['prefix' => 'api'], function() {
   Route::get('mail-notify', 'ReminderController@daily_notify');
});