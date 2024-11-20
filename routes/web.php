<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PDFController;

Route::get('/pdf/generate', [PDFController::class, 'generate'])->name('pdf.generate');

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
