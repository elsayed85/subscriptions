<?php

use Illuminate\Support\Facades\Route;


Route::get('sub', function () {
    return "hey sub";
})->name('sub');
