<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;

Route::get("/contact-us", [ContactController::class, 'getContact']);

Route::post("contact-us", [ContactController::class, 'saveContact'])->name('contact');

Route::get('reload-captcha', [ContactController::class, 'reloadCaptcha']);

Route::get("/", [FrontEndController::class, 'index'])->name('post.index');

Route::get("/posts/{post}", [FrontEndController::class, 'show'])->name('show');

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/home', [HomeController::class, 'index'])->name('home');
     

    Route::get("/settings", [SettingsController::class, 'index'])->name('settings');

    Route::post("/settings/update", [SettingsController::class, 'update'])->name('setting.update');

    Route::resource('posts', PostsController::class);
    
    Route::resource('profiles', ProfilesController::class);


   


});
