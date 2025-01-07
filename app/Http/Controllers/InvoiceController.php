<?php

namespace App\Http\Controllers;

use App\Models\PublisherOrder;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\ServiceOrder;
use Illuminate\Support\Str;

class InvoiceController extends Controller
{
    public function downloadInvoice($id)
    {
        // Ambil data invoice berdasarkan ID
        $invoice = PublisherOrder::findOrFail($id); // Ambil data invoice berdasarkan ID

        // Sanitasi nama file
        $sanitizedInvoiceNumber = Str::slug(str_replace('/', '-', $invoice->invoice_number));
        $fileName = 'Invoice-' . $sanitizedInvoiceNumber . '.pdf';
    
        // Render view menjadi PDF
        $pdf = Pdf::loadView('invoice', compact('invoice'));
    
        // Unduh file PDF
        return $pdf->download($fileName);
    }
}
