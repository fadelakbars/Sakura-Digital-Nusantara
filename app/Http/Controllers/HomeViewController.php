<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeViewController extends Controller
{
    public function index ()
    {
        $books = Book::all();

        $testimonis = Testimoni::all();

        return view('home', [
            'books' => $books,
            'testimonis' => $testimonis,
        ]);
    }
}
