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
            'manuscript_path' => 'required|file|mimes:doc,docx|max:2048',
            'print_quantity' => 'required|integer',
            'service_type' => 'required|exists:publisher_packages,id',
            'book_size' => 'required|exists:price_ranges,id',
        ]);

        // Ambil data layanan dan paket
        $package = PublisherPackage::findOrFail($request->input('service_type'));
        $priceRange = PriceRange::findOrFail($request->input('book_size'));

        $totalprice = $package->base_price + $priceRange->price;
        // Simpan data order
        $manuscriptPath = $request->file('manuscript_path')->store('manuscripts');

        PublisherOrder::create([
            'client_name' => $request->input('client_name'),
            'book_title' => $request->input('book_title'),
            'client_email' => $request->input('client_email'),
            'client_phone' => $request->input('client_phone'),
            'client_gender' => $request->input('client_gender'),
            'client_birthdate' => $request->input('client_birthdate'),
            'client_job_title' => $request->input('client_job_title'),
            'client_institution' => $request->input('client_institution'),
            'manuscript_path' => $manuscriptPath,
            'print_quantity' => $request->input('print_quantity'),
            'package_id' => $package->package_name,
            'price_range_id' => $priceRange->page_rage,
            'total_price' => $totalprice, // Tambahkan logika perhitungan harga jika ada
            'status' => 'Pending',
        ]);

        return back()->with('success', 'Order berhasil dibuat.');
    }


}
