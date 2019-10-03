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
    return view('First');
});

Route::get('/second', function () {
    return view('Second');
});


Route::post('/share/store', 'SharesController@store');

Route::get('send-mail/{email}', function ($email) {
   
   	$details = [
        'title' => 'Hello there, I am sharing with you',
    ];
   
    \Mail::to($email)->send(new \App\Mail\MailFriend($details));
   
    dd("Email is Sent.");
});