<?php

use App\Http\Controllers\HomeViewController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PublisherViewController;
use App\Http\Controllers\PublishOrderController;
use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', [HomeViewController::class, 'index']);
// END HOME

// PROFIL
Route::view('/profil', 'profil');
// END PROFIL

// PUBLISHER  
Route::get('/publisher', [PublisherViewController::class, 'index']);
Route::get('/buku/{id}', [PublisherViewController::class, 'detailbuku']);
Route::post('/publisher-order', [PublishOrderController::class, 'store'])->name('service-order.store'); 
Route::get('/invoice/{id}/download', [InvoiceController::class, 'downloadInvoice'])->name('invoice.download');
// END PUBLISHER  

