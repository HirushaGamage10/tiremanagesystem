<?php

use Illuminate\Support\Facades\Route;
// use function view;

Route::get('/', function () {
    return view('TireRequest.approval');
});
