<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('study_scheme/import', [App\Http\Controllers\study_scheme_controller::class, 'index']);

Route::post('study_scheme/import', [App\Http\Controllers\study_scheme_controller::class, 'importExcelData']);
