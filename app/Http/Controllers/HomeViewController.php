<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeViewController extends Controller
{
    public function index ()
    {
        $books = Book::all();

        return view('home', [
            'books' => $books
        ]);
    }
}
