<?php

use Illuminate\Support\Facades\Routes;

Route::get('/', function(){
    return View("pages/Home");
})->name('app_home');

Route::get('about', function(){
    return View("pages/About");
})->name('app_about');;