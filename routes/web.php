<?php

use Illuminate\Support\Facades\Routes;

Route::get('/', function(){
    return View("pages/Home");
});

Route::get('about', function(){
    return View("pages/About");
});