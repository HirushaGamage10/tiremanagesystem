<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tire', [MasterDataController::class, 'tire'])->name('masterdata.tire');
