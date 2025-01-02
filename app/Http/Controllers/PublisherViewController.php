<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class PublisherViewController extends Controller
{
    public function index() {
        $books = Book::all();

        return view('publisher', [
            'books' => $books
        ]);
    }
}
