<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(["prefix"=> "test"], function (){
   Route::resource("/", "TestController", [
       "names" =>[
             "create" => "createTest",
             "store" => "storeTest",
             "index" => "Tests",
            //"destroy" => "deleteTest",
           ]
       ]);
    Route::delete("deleteTest/{id}", "TestController@destroy")->name("deleteTest");
});


Route::get("click/{id?}", function ($id = 1) {

    dd($id);

})->where(["id" => "[0-9]+"]);
