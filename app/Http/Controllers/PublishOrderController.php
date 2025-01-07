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
            'manuscript_path' => 'required|file|mimes:doc,docx|max:2048',
            'print_qunaitity'=> 'required|integer|max:20',
            'service_type' => 'required|exists:publisher_packages,id',
            'book_size' => 'required|exists:price_ranges,id',
        ]);
        $manuscriptPath = $request->file('manuscript_path')->store('manuscripts');
        if (!$request->hasFile('manuscript_path')) {
            return back()->withErrors(['manuscript_path' => 'File naskah wajib diunggah.']);
        }
        $package = PublisherPackage::find($request->input('service_type'));
        $priceRange = PriceRange::find($request->input('book_size'));
        
        $jumlahCetakan = $request->input('print_quantity');

        $printCost = $this->calculatePrintCost($jumlahCetakan);

        $totalPrice = $priceRange->price + $printCost['total_cost'] + $package->base_price;
        // $printQuantity = $request->input('print_quantity');
        // $totalPrice = $priceRange->price + $package->base_price;


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
            'package_id' => $package->id,
            'price_range_id' => $package->id,
            'print_qunaitity' => $jumlahCetakan,
            'total_price' => $totalPrice,
            'status' => 'Pending',
        ]);

        alert()->success('Terimakasih!','Orderan berhasil dibuat, silahkan tunggu konfirmasi dari admin');
        return back();
    }

    public function calculatePrintCost($jumlahCetakan)
    {
        // Ambil semua range harga
        $printQuantities = PrintQuantity::all();

        // Temukan range yang sesuai
        $matchedRange = $printQuantities->filter(function ($range) use ($jumlahCetakan) {
            // Pisahkan string "1 - 10 cetakan" menjadi angka min dan max
            preg_match('/(\d+)\s*-\s*(\d+)/', $range->quantity, $matches);
            $min = (int)$matches[1];
            $max = (int)$matches[2];

            // Periksa apakah jumlah cetakan ada dalam range
            return $jumlahCetakan >= $min && $jumlahCetakan <= $max;
        })->first();

        // Jika tidak ada range yang cocok, gunakan fallback harga default
        if (!$matchedRange) {
            return [
                'price_per_unit' => 20000, // Harga default
                'total_cost' => $jumlahCetakan * 20000,
            ];
        }

        // Hitung total harga berdasarkan range yang ditemukan
        $pricePerUnit = $matchedRange->price_per_unit;
        return [
            'price_per_unit' => $pricePerUnit,
            'total_cost' => $pricePerUnit * $jumlahCetakan,
        ];
    }


}
