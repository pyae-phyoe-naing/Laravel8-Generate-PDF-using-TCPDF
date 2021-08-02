<?php

use App\Http\Controllers\PDFDemoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/PdfDemo',[PDFDemoController::class,'index']);
Route::get('/sample-pdf',[PDFDemoController::class,'samplePDF']);
Route::get('/save-pdf',[PDFDemoController::class,'savePDF']);
Route::get('/download-pdf', [PDFDemoController::class,'downloadPDF']);
Route::get('/html-to-pdf',[PDFDemoController::class,'htmlToPDF']);
