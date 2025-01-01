<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PublishOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/publisher', function () {
    return view('publisher');
});
Route::get('/software-house-sakura', function () {
    return view('software-house');
});
Route::post('/publisher-order', [PublishOrderController::class, 'store'])->name('service-order.store'); 

Route::view('/invoice', 'invoice');

// Route::get('/invoice/{id}/download', [InvoiceController::class, 'downloadInvoice'])->name('invoice.download');
Route::get('/invoice/{id}/download', [InvoiceController::class, 'downloadInvoice'])->name('invoice.download');