<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PublisherViewController;
use App\Http\Controllers\PublishOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/software-house-sakura', function () {
    return view('software-house');
});

// PUBLISHER  
Route::get('/publisher', [PublisherViewController::class, 'index']);
Route::post('/publisher-order', [PublishOrderController::class, 'store'])->name('service-order.store'); 
Route::get('/invoice/{id}/download', [InvoiceController::class, 'downloadInvoice'])->name('invoice.download');
// END PUBLISHER  
