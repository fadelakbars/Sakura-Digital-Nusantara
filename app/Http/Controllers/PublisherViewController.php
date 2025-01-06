<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\PriceRange;

class PublisherViewController extends Controller
{
    public function index() {
        $books = Book::all();

        $paketbukuu = PriceRange::all();

        return view('publisher', [
            'paketbukuu' => $paketbukuu,
            'books' => $books,
        ]);
    }

    public function detailbuku($id) {
        $book = Book::findOrFail($id);

        return view('detail-buku', ['book' => $book]);
    }
}
