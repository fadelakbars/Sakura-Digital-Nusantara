<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\PriceRange;
use App\Models\PublisherPackage;
use App\Models\TurnitinOrder;

class PublisherViewController extends Controller
{
    public function index() {
        $books = Book::all();

        $paketturniting = TurnitinOrder::all();

        $layananpublikasi = PublisherPackage::all() ;

        $paketbukuu = PriceRange::all();

        return view('publisher', [
            'paketturnitin' => $paketturniting,
            'paketbukuu' => $paketbukuu,
            'books' => $books,
            'layananpublikasi' => $layananpublikasi,
        ]);
    }

    public function detailbuku($id) {
        $book = Book::findOrFail($id);

        return view('detail-buku', ['book' => $book]);
    }
}
