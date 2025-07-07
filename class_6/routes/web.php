<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\checkCountry;



Route::get('/', function () {
    return view('welcome');
})->name('welcome')->middleware("checkdata");


Route::get("/create" , [ProductController::class , 'ViewCreate'])->name("create");
Route::post("/submit" , [ProductController::class , 'StoreData'])->name("addData");

// Route::get("/list" , [ProductController::class , "listView"])->name("allData");

Route::delete("/destroy/{id}" , [ProductController::class , "destroy"])->name("deleteData");
Route::get("/edit/{id}" , [ProductController::class , "edit"])->name("editForm");
Route::put("/update/{id}" , [ProductController::class , "update"])->name("updateData");

Route::get('/trash' , [ProductController::class , 'trash'])->name('trash');
Route::post("/permanentdelete/{id}" , [ProductController::class , "permanentDelete"])->name("permanentdelete");
Route::post("/restore/{id}" , [ProductController::class , "restore"])->name("restore");


Route::get("/list" , [ProductController::class , "listView"])->name("allData")->middleware(checkCountry::class);




// Route::middleware('checkdata')->group(function (){
  
//     Route::get("/create" , [ProductController::class , 'ViewCreate'])->name("create");
//     Route::get('/trash' , [ProductController::class , 'trash'])->name('trash');
  
// });
 
 