<?php

namespace App\Http\Controllers;

use Alert;
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
            'manuscript_path' => 'required|string|max:20',

            'package_id' => 'required|exists:publisher_packages,id',
            'price_range_id' => 'required|exists:price_ranges,id',
            'print_quantity_id' => 'nullable|exists:print_quantities,id',
        ]);

        $totalPrice = 0;
        if ($request->input('package_id') === 'Menerbitkan buku') {
            $totalPrice = $request->input('price_range_id');
        }elseif ($request->input('package_id') === 'Menerbitkan buku dengan HKI') {
            $totalPrice = $request->input('price_range_id') + 300;
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
            
            'status' => 'Pending', 
            'package_id' => $request->input('name'),
            'price_range_id' => $request->input('name'),
            'print_quantity_id' => $request->input('name'),
            'total_price' => 'Pending', 

        ]);

        // $servicePackage = PublisherPackage::findOrFail($validated['service_package_id']);

        // Hitung total harga
        // $totalPrice = $servicePackage->base_price;

        // if ($request->filled('price_range_id')) {
        //     $priceRange = \App\Models\PriceRange::findOrFail($validated['price_range_id']);
        //     $totalPrice += $priceRange->price;
        // }

        // if ($request->filled('print_quantity_id')) {
        //     $printQuantity = \App\Models\PrintQuantity::findOrFail($validated['print_quantity_id']);
        //     $totalPrice += $printQuantity->price_per_unit * $printQuantity->quantity;
        // }

        // $order = \App\Models\Order::create(array_merge($validated, ['total_price' => $totalPrice]));

        return redirect()->route('orders.index')->with('success', 'Order berhasil dibuat.');
    }

}
