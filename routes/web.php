<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;

Route::get("/contact-us", [ContactController::class, 'getContact']);

Route::post("/contact-us", [ContactController::class, 'saveContact']);

Route::get("/", [FrontEndController::class, 'index']);

Route::get("/posts/{post}", [FrontEndController::class, 'show']);

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/home', [HomeController::class, 'index']);
     

    Route::get("/settings", [SettingsController::class, 'index']);

    Route::post("/settings/update", [SettingsController::class, 'update']);

    Route::resource('posts', '\App\Http\Controllers\PostsController::class' );
    
    Route::resource('profiles', '\App\Http\Controllers\ProfilesController::class');


   


});
