@extends('app')

@section('title', 'Detail Buku')

@section('content')
<section class="bg-white dark:bg-gray-900 py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Book Cover -->
            <div class="flex justify-center items-center">
                <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" class="rounded-lg shadow-lg w-64 h-96 object-cover">
            </div>

            <!-- Book Details -->
            <div class="flex flex-col justify-center">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">{{ $book->title }}</h1>
                <p class="text-gray-700 dark:text-gray-400 mb-2">
                    <span class="font-semibold">Penulis:</span> {{ $book->author }}
                </p>
                <p class="text-gray-700 dark:text-gray-400 mb-2">
                    <span class="font-semibold">Penerbit:</span> {{ $book->publisher }}
                </p>
                <p class="text-gray-700 dark:text-gray-400 mb-2">
                    <span class="font-semibold">Tahun Terbit:</span> {{ $book->year }}
                </p>
                <p class="text-gray-700 dark:text-gray-400 mb-2">
                    <span class="font-semibold">Kategori:</span> {{ $book->category }}
                </p>
                <p class="text-gray-700 dark:text-gray-400 mb-2">
                    <span class="font-semibold">ISBN:</span> {{ $book->isbn }}
                </p>
                <p class="text-gray-700 dark:text-gray-400 mb-6">
                    <span class="font-semibold">Stok:</span> {{ $book->stock > 0 ? 'Tersedia' : 'Habis' }}
                </p>
                <p class="text-gray-700 dark:text-gray-400 mb-6">
                    <span class="font-semibold">Deskripsi:</span>
                    {{ $book->description }}
                </p>
                <div class="flex items-center space-x-4">
                    <span class="text-2xl font-bold text-gray-900 dark:text-white">Rp. {{ number_format($book->price, 0, ',', '.') }}</span>
                    <a href="{{ $book->link }}" target="_blank" class="bg-blue-700 text-white px-5 py-2.5 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                        Beli Buku
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
