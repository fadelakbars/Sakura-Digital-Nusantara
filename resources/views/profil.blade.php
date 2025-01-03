@extends('app')

@section('title', 'Profil')

@section('content')

{{-- about --}}
    <section class="bg-white dark:bg-gray-900">
        <h1 class="mb-1 mt-10 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-4xl dark:text-white text-center">Profil</h1>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-4xl dark:text-white">Visi</h1>
            <p class="mb-8 text-md font-normal text-gray-500 lg:text-md sm:px-16 lg:px-48 dark:text-gray-400">Menjadi Lembaga Penerbit yang kredibel, kompeten, dan berkualitas terbaik bagi mitra demi tercapainya ekosistem literasi bagi generasi emas Indonesia yang berperadaban maju.</p>
            <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-4xl dark:text-white">Misi</h1>
            <p class="mb-8 text-md font-normal text-gray-500 lg:text-md sm:px-16 lg:px-48 dark:text-gray-400">1. Menumbuhkan minat menulis bagi generasi muda Indonesia melalui penerbitan buku dan jurnal yang bereputasi.<br>
                2. Menghasilkan buku-buku dan artikel yang berkualitas yang dapat menambah wawasan literasi seluruh kalangan. <br>
                3. Memfasilitasi seluruh kalangan dosen, mahasiswa, profesional, dan masyarakat dalam menerbitkan tulisan dan karyanya dalam bentuk buku layak jual.<br>
                4. Memotivasi dan menginspirasi masyarakat penulis dalam menghasilkan karya yang berkualitas dan orisinal.<br>
                5. Menjadi perusahaan penerbit umum yang professional, terpercaya, dan berdaya saing nasional.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#" class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Daftar Menerbitkan Buku
                </a>  
            </div>
        </div>
    </section>
{{-- about --}}

{{-- struktur organisasi --}}
    <section class="organization-structure">
        <div class="container">
            <!-- Root -->
            <div class="level root">
                <div class="box">CV. SDN</div>
            </div>
            <!-- Director -->
            <div class="level">
                <div class="box">Direktur</div>
            </div>
            <!-- Komisaris dan CEO -->
            <div class="level">
                <div class="box">Komisaris</div>
                <div class="box">CEO</div>
            </div>
            <!-- Divisions -->
            <div class="level">
                <div class="box">Divisi Publisher</div>
                <div class="box">Divisi Journal</div>
                <div class="box">Application & Data Center</div>
                <div class="box">IT Development</div>
            </div>
        </div>
    </section>
{{-- struktur organisasi --}}

@endsection
