<?php

namespace App\Http\Controllers;

use App\Models\TurnitinOrder;
use Illuminate\Http\Request;

class TurnitinOrderController extends Controller
{
    public function store(Request $request) 
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'client_phone' => 'required|string|max:255',
            'document_title' => 'required|string|max:255',
            'document_path' => 'required|string|max:255',
            'invoice_number' => 'required|string|max:255',
            'invoice_path' => 'required|string|max:255',
        ]);

        $dokumentPath = $request->file('document_path')->store('turnitin');
        if (!$request->hasFile('document_path')) {
            return back()->withErrors(['document_path' => 'file wajib diunggah']);
        }

        TurnitinOrder::create([
            'client_name' => $request->input('client_name'),
            'client_email' => $request->input('client_email'),
            'client_phone' => $request->input('client_phone'),
            'document_title' => $request->input('document_title'),
            'document_path' => $dokumentPath,
            'status'=> 'Pending',
        ]);

        alert()->success('Terimakasih!', 'Orderan berhasil dibuat, silahkan tunggu konfirmasi dari admin');
        return redirect()->back()->with('message', 'Orderan berhasil dibuat.');
    }

    public function downloadDocumentTurnitin($id)
    {
        $order = TurnitinOrder::findOrFail($id);
    
        if (!$order->document_path) {
            return redirect()->back()->with('error', 'Manuscript file not found.');
        }
    
        $filePath = storage_path('app/private/' . $order->document_path);
    
        if (!file_exists($filePath)) {
            return redirect()->back()->with('error', 'Manuscript file not found on server.');
        }
    
        // Format penamaan file
        $fileName = sprintf(
            '%s_%s_Manuscript.%s',
            str_replace(' ', '_', $order->document_title), 
            str_replace(' ', '_', $order->document_path), 
            pathinfo($filePath, PATHINFO_EXTENSION)  
        );
    
        return response()->download($filePath, $fileName);
    }
}
