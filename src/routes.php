<?php

use Illuminate\Support\Facades\Route;


Route::get('/demo', function() {
    return view('demo::index');
});
