<?php

use App\Http\Controllers\HomeViewController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PublisherViewController;
use App\Http\Controllers\PublishOrderController;
use App\Http\Controllers\TurnitinOrderController;
use App\Http\Controllers\ViewJournalController;
use Filament\Forms\Get;
use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', [HomeViewController::class, 'index']);
// END HOME

// PROFIL
Route::view('/profil', 'profil');
// END PROFIL

Route::get('/journal', [ViewJournalController::class, 'index']);

// PUBLISHER  
Route::get('/publisher', [PublisherViewController::class, 'index']);
Route::get('/buku/{id}', [PublisherViewController::class, 'detailbuku']);
Route::post('/publisher-order', [PublishOrderController::class, 'store'])->name('service-order.store'); 
Route::get('/invoice/{id}/download', [InvoiceController::class, 'downloadInvoice'])->name('invoice.download');
Route::get('/publisher-order/{id}/download-manuscript', [PublishOrderController::class, 'downloadManuscript'])->name('manuscript.download');
Route::post('/turnitin-order', [TurnitinOrderController::class, 'store'])->name('turnitin-order.store');
Route::get('/turnitin-order/{id}/download-document', [TurnitinOrderController::class, 'downloadDocumentTurnitin'])->name('turnitin.download');
// END PUBLISHER  

