<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\PriceRange;
use App\Models\PrintQuantity;
use App\Models\PublisherOrder;
use App\Models\PublisherPackage;
use App\Models\ServiceOrder;
use Illuminate\Http\Request;


class PublishOrderController extends Controller
{
    

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'book_title' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'client_phone' => 'required|string|max:20',
            'client_gender' => 'required|in:Pria,Wanita',
            'client_birthdate' => 'required|date|before:today',
            'client_job_title' => 'required|string|max:20',
            'client_institution' => 'required|string|max:20',
            'manuscript_path' => 'required|string|max:255',
            'print_qunaitity'=> 'required|integer|max:20',
            'package_id' => 'required|exists:publisher_packages,id',
            'price_range_id' => 'required|exists:price_ranges,id',
        ]);

        $carinamalayanan = PublisherPackage::findOrFail($request->input('package_id'));
        $namalayanan = $carinamalayanan->package_name;

        $carihargalayanan = PublisherPackage::findOrFail($request->input('package_id'));
        $hargalayanan = $carihargalayanan->base_price;

        $caripaketpenerbitan = PriceRange::findOrFail($request->input('price_range_id'));
        $paketpenerbitan = $caripaketpenerbitan->price;

        $carihargacetakan = PrintQuantity::findOrFail($request->input('print_quantity_id'));
        $hargacetakan = $carihargacetakan->price_per_unit;

        $rangehargacetakan = PrintQuantity::findOrFail($request->input('print_quantity_id'));
        $rangecetakan = $rangehargacetakan->quantity;

        $jumlahcetakancustomer = $request->input('print_qunaitity');

        $totalPrice = 0;
        if ($namalayanan === 'Menerbitkan buku') {
            $totalPrice = $paketpenerbitan;
        }elseif ($namalayanan === 'Menerbitkan buku dengan HKI') {
            $totalPrice = $hargalayanan + $paketpenerbitan;
        }

        PublisherOrder::created([
            'client_name' => $request->input('name'),
            'book_title' => $request->input('book_title'),
            'client_email' => $request->input('client_email'),
            'client_phone' => $request->input('client_phone'),
            'client_gender' => $request->input('client_gender'),
            'client_birthdate' => $request->input('client_birthdate'),
            'client_job_title' => $request->input('client_job_title'),
            'client_institution' => $request->input('client_institution'),
            'manuscript_path' => $request->input('manuscript_path'),
            'print_qunaitity' => $request->input('print_qunaitity'),
            'package_id' => $request->input('package_id'),
            'price_range_id' => $request->input('price_range_id'),
            'print_quantity_id' => $request->input('print_quantity_id'),
            'book_hki_price_id' => $request->input('book_hki_price_id'),
            'total_price' => $totalPrice, 
            'status' => 'Pending', 
        ]);

        return redirect()->route('orders.index')->with('success', 'Order berhasil dibuat.');
    }

}
