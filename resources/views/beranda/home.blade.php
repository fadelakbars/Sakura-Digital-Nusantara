@extends('layout.app')

@section('title', 'Home')

@section('content')

<section class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Sakura Publisher</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Publisher Bermutu, Berkualitas, dan Sesuai dengan Kaidah Akademik. Kami memiliki beberapa jurnal dari berbagai bidang ilmu. Scope jurnal dapat dilihat pada masing-masing web jurnal. Silahkan kunjungi melalui link berikut:</p>
    </div>
</section>



<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Sakura Digital Nusantara</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">CV. Sakura Digital Nusantara atau disingkat SDN adalah perusahaan yang didirkan pada 15 Nopember 2021 dan Nopember 2022 dilakukan ekspansi beberapa peluang usaha yang berhubungan dengan pengadaaan barang dan jasa. Kantor SDN beralamat pada Jl. Biola Raya J148 Perumnas Antang, Kelurahan Manggala Kota Makassar.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="#" class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                Read more
            </a>  
        </div>
    </div>
</section>


@endsection
