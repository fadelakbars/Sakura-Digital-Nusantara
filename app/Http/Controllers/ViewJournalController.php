<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewJournalController extends Controller
{
    public function index() 
    {
        return view('journal');
    }
}
