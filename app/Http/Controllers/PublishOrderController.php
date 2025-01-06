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
            'client_institution' => 'required|string|max:20',
            'client_institution' => 'required|string|max:20',

            'manuscript_path' => 'required|file|mimes:doc,docx|max:2048',
            'print_qunaitity'=> 'required|integer|max:20',
        ]);

        // $copyan = $request->input('print_qunaitity');
        // $hargapercetakan = $copyan * ;
        $laynanpublikasi = $request->input('service_type');
        $paketbukuu = $request->input('book_size');
        
        $totalPrice = $laynanpublikasi + $paketbukuu;

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
            'total_price' => $totalPrice,
            'status' => 'Pending',
        ]);

        alert()->success('Terimakasih!','Orderan berhasil dibuat, silahkan tunggu konfirmasi dari admin');
        return back();
    }

}
