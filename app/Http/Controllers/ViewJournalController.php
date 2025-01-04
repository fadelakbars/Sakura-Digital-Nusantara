<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class ViewJournalController extends Controller
{
    public function index() 
    {

        $jurnals = Journal::all();

        return view('journal', ['jurnals' => $jurnals]);
    }
}
