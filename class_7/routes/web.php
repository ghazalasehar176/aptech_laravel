<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home/' , function() {
return view ('home');
});

Route::get('about/' , function() {
return view ('welcome');
});
Route::get('abcd/'  , function () {
echo "basic laravel routes ";
});


//short form to open a page
Route::view('/home'  , 'home');
