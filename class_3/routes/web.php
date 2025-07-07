<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

Route::get('/', function () {
    return view('welcome');
});


//parameter Route
//jab url ke andar data pass ho called paramter Route

Route::get('/data/{id}' , function($id){
    echo "<h1>".$id."</h1>";
});

Route::get('/name/{name}' , function($name){
    echo "<h3>".$name."</h3>";
});


//controller route
Route::get('/welcome' , [Usercontroller::class  , 'welcome']);
Route::get('/index' , [Usercontroller::class , 'form']);
Route::get('/users/{userr}' , [Usercontroller::class , 'userData']);
