

@extends('app')

@section('title', 'Detail Buku')

@section('content')
<section class="bg-white dark:bg-gray-900 py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Book Cover -->
            <div class="flex justify-center items-center">
                <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" class="rounded-lg shadow-lg w-72 h-96 object-cover">
            </div>

            <!-- Book Details -->
            <div class="flex flex-col justify-center space-y-4">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">{{ $book->title }}</h1>
                <p class="text-gray-700 dark:text-gray-400">
                    <span class="font-semibold">Penulis:</span> {{ $book->author }}
                </p>
                <p class="text-gray-700 dark:text-gray-400">
                    <span class="font-semibold">Penerbit:</span> {{ $book->publisher }}
                </p>
                <p class="text-gray-700 dark:text-gray-400">
                    <span class="font-semibold">Tahun Terbit:</span> {{ $book->year }}
                </p>
                <p class="text-gray-700 dark:text-gray-400">
                    <span class="font-semibold">Kategori:</span> {{ $book->category }}
                </p>
                <p class="text-gray-700 dark:text-gray-400">
                    <span class="font-semibold">ISBN:</span> {{ $book->isbn }}
                </p>
                <p class="text-gray-700 dark:text-gray-400">
                    <span class="font-semibold">Stok:</span> {{ $book->stock > 0 ? 'Tersedia' : 'Habis' }}
                </p>
                <p class="text-gray-700 dark:text-gray-400">
                    <span class="font-semibold">Deskripsi:</span>
                    {{ $book->description }}
                </p>
                <div class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                    <a href="{{ url('https://shopee.co.id/sakura_publisher') }}" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <img src="{{ asset('img/shopee.png') }}" alt="Shopee" class="me-3 w-10 h-10">
                        <div class="text-left rtl:text-right">
                            <div class="mb-1 text-xs">Belanja di</div>
                            <div class="-mt-1 font-sans text-sm font-semibold">Shopee</div>
                        </div>
                    </a>
                    <a href="{{ url('https://www.tokopedia.com/sakurapublisher') }}" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <img src="{{ asset('img/Tokopedia_Mascot.png') }}" alt="Tokopedia" class="me-3 w-10 h-10">
                        <div class="text-left rtl:text-right">
                            <div class="mb-1 text-xs">Belanja di</div>
                            <div class="-mt-1 font-sans text-sm font-semibold">Tokopedia</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
