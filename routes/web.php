<?php

use Illuminate\Support\Facades\Routes;

Route::get('/', function(){
    return View("Home");
});

Route::get('about', function(){
    return View("About");
});