<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StringController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/master_string', function() {return view('master_string');});


Route::post('/check-strings', [StringController::class, 'checkStrings']);
