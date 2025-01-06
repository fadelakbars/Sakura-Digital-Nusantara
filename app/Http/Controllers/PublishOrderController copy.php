<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\ServiceOrder;
use Illuminate\Http\Request;


class PublishOrderController extends Controller
{
    

    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'book_title' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'job_title' => 'required|string|max:255',
            'date_of_birth' => 'required|date|before:today',
            'institution' => 'required|string|max:255',
            'service_type' => 'required|in:Penerbitan Buku","Mencetak Buku","Menerbitkan dan Mencetak',
            'book_size' => 'nullable|in:100-250 halaman,250-550 halaman',
            'print_quantity' => 'nullable|integer|min:1',
            'address' => 'nullable|string',
        ]);

        $price = 0;
        if ($request->input('book_size') === '100-250 halaman') {
            $price = 450000;
        } elseif ($request->input('book_size') === '250-550 halaman') {
            $price = 550000;
        }

        // Hitung total harga berdasarkan jumlah cetakan
        // $total_price = $price * ($request->input('print_quantity') ?? 1);

        // Simpan data ke database
        ServiceOrder::create([
            'name' => $request->input('name'),
            'book_title' => $request->input('book_title'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'job_title' => $request->input('job_title'),
            'date_of_birth' => $request->input('date_of_birth'),
            'institution' => $request->input('institution'),
            'service_type' => $request->input('service_type'),
            'book_size' => $request->input('book_size'),
            'print_quantity' => $request->input('print_quantity'),
            'address' => $request->input('address'),
            'amount' => $price,
            'status' => 'Pending', 
        ]);

        alert()->success('Terimakasih!','Orderan berhasil dibuat, silahkan tunggu konfirmasi dari admin');
        return back();

        // Redirect dengan pesan sukses
        // return redirect()->back()->with('success', 'Order submitted successfully!');
    }
}
