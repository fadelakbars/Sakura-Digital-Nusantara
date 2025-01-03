@extends('app')

@section('title', 'Detail Buku')

@section('content')
<section class="bg-white dark:bg-gray-900 py-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center gap-10">
            <!-- Book Cover -->
            <div class="flex justify-center items-center">
                <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" class="rounded-lg shadow-lg w-64 h-96 object-cover">
            </div>

            <!-- Book Details -->
            <div class="flex flex-col justify-center">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">{{ $book->title }}</h1>
                <table class="table-auto text-gray-700 dark:text-gray-400">
                    <tbody>
                        <tr>
                            <td class="font-semibold pr-4">Deskripsi</td>
                            <td>:{{ $book->description }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold pr-4">Penulis</td>
                            <td>:{{ $book->author }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold pr-4">Penerbit</td>
                            <td>:{{ $book->publisher }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold pr-4">Tahun Terbit</td>
                            <td>:{{ $book->published_year }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold pr-4">Kategori</td>
                            <td>:{{ $book->category }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold pr-4">ISBN</td>
                            <td>:{{ $book->isbn }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold pr-4">Stok</td>
                            <td>:{{ $book->stock }}</td>
                        </tr>
                    </tbody>
                </table>

                <div class="items-center mt-10 justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                    <a href={{ $book->link }} class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <img src={{ asset('img/shopee.png') }} alt="Tokopedia Mascot" class="me-3 w-10 h-10">
                        <div class="text-left rtl:text-right">
                            <div class="mb-1 text-xs">Belanja di</div>
                            <div class="-mt-1 font-sans text-sm font-semibold">Shopee</div>
                        </div>
                    </a>
                    <a href={{ $book->tokopedia }} class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <img src={{ asset('img/Tokopedia_Mascot.png') }} alt="Tokopedia Mascot" class="me-3 w-10 h-10">
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
