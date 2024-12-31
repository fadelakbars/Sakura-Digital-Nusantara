<?php

namespace App\Http\Controllers;

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
            'date_of_birth' => 'required',
            'gender' => 'required|in:pria,wanita',
            'institution' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            // 'pdf_path' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'service_type' => 'required|in:penerbitan_buku,mencetak_buku,menerbitkan_dan_mencetak',
            'book_size' => 'nullable|in:100-250 halaman,250-550 halaman',
            'print_quantity' => 'nullable|integer|min:1',
            'address' => 'nullable|string',
        ]);

        // Simpan data ke database
        ServiceOrder::create([
            'name' => $request->input('name'),
            'book_title' => $request->input('book_title'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'date_of_birth' => $request->input('date_of_birth'),
            'gender' => $request->input('gender'),
            'institution' => $request->input('institution'),
            'job_title' => $request->input('job_title'),
            // 'pdf_path' => $request->input('pdf_path'),
            'service_type' => $request->input('service_type'),
            'book_size' => $request->input('book_size'),
            'print_quantity' => $request->input('print_quantity'),
            'address' => $request->input('address'),
            'status' => 'pending', // Default status
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Order submitted successfully!');
    }
}
