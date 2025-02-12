<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('home', [
        'name' => 'John Doe',
        'age' => 35,
        'position' => 'Developer',
        'address' => 'Anytown, USA'
    ]);
});

Route::get('/contacts', function () {
    return view('contacts', [
        'address' => 'Anytown, USA',
        'post_code' => '1234567',
        'email' => 'example@example.com',
        'phone' => '555-1234-5678'
    ]);
});
