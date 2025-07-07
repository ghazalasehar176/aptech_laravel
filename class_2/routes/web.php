<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


//view method
Route::view('/myhome' ,'home')->name("homepage");

Route::view('/page' , 'page.hello')->name("pagetemplates");

Route::view('/home2' , 'index')->name("home2");

//Route::post isliye use hua kyunki form POST method se data send karta hai, aur ye route us POST request ko handle karta hai.
Route::post('/submit' , function(Request $request){
//Request $request` function mai is liye likha gaya hai taake form se bheje gaye data ko access kiya ja sake.
$name  = $request->name;
$email = $request->email;
$number = $request->number;
$address = $request->address;
// Form se bheje gaye input values ko alag-alag variables mein store karne ke liye ye lines likhi gayi hain.


echo $name ."<br>".$email ."<br>".$number."<br>".$address;

})->name('formSubmit');
//->name('formSubmit') se route ko name mila, aur `action="{{ route('formSubmit') }}"` usi named route ko access karke URL banata hai.
