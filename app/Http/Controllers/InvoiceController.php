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
        $invoice = PublisherOrder::with(['package', 'priceRange', 'printQuantity'])->findOrFail($id);

        $sanitizedInvoiceNumber = Str::slug(str_replace('/', '-', $invoice->invoice_number));
        $fileName = 'Invoice-' . $sanitizedInvoiceNumber . '.pdf';

        $pdf = Pdf::loadView('invoice', compact('invoice'));

        return $pdf->download($fileName);
    }


}
