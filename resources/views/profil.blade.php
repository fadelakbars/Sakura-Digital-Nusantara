@extends('app')

@section('title', 'Profil')

@section('content')

{{-- about --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-4xl dark:text-white">Visi</h1>
            <p class="mb-8 text-md font-normal text-gray-500 lg:text-md sm:px-16 lg:px-48 dark:text-gray-400">Menjadi Lembaga Penerbit yang kredibel, kompeten, dan berkualitas terbaik bagi mitra demi tercapainya ekosistem literasi bagi generasi emas Indonesia yang berperadaban maju.</p>
            <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-4xl dark:text-white">Misi</h1>
            <p class="mb-8 text-md font-normal text-gray-500 lg:text-md sm:px-16 lg:px-48 dark:text-gray-400">1. Menumbuhkan minat menulis bagi generasi muda Indonesia melalui penerbitan buku dan jurnal yang bereputasi.<br>
                2. Menghasilkan buku-buku dan artikel yang berkualitas yang dapat menambah wawasan literasi seluruh kalangan. <br>
                3. Memfasilitasi seluruh kalangan dosen, mahasiswa, profesional, dan masyarakat dalam menerbitkan tulisan dan karyanya dalam bentuk buku layak jual.<br>
                4. Memotivasi dan menginspirasi masyarakat penulis dalam menghasilkan karya yang berkualitas dan orisinal.<br>
                5. Menjadi perusahaan penerbit umum yang professional, terpercaya, dan berdaya saing nasional.</p>
        </div>
    </section>
{{-- about --}}

{{-- struktur organisasi --}}
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
        <!-- Root Level -->
        <div class="text-center mb-8">
            <div class="inline-block bg-blue-500 text-white font-bold rounded-md px-6 py-4">
            CV. SDN
            </div>
        </div>
    
        <!-- Direktur -->
        <div class="text-center mb-8">
            <div class="inline-block bg-white shadow-md text-gray-700 font-bold rounded-md px-6 py-4">
            Direktur
            </div>
        </div>
    
        <!-- Komisaris dan CEO -->
        <div class="flex justify-center gap-4 mb-8">
            <div class="bg-white shadow-md text-gray-700 font-bold rounded-md px-6 py-4 w-48 text-center">
            Komisaris
            </div>
            <div class="bg-white shadow-md text-gray-700 font-bold rounded-md px-6 py-4 w-48 text-center">
            CEO
            </div>
        </div>
    
        <!-- Divisions -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-white shadow-md text-gray-700 font-bold rounded-md px-6 py-4 text-center">
            Divisi Publisher
            </div>
            <div class="bg-white shadow-md text-gray-700 font-bold rounded-md px-6 py-4 text-center">
            Divisi Journal
            </div>
            <div class="bg-white shadow-md text-gray-700 font-bold rounded-md px-6 py-4 text-center">
            Application & Data Center
            </div>
            <div class="bg-white shadow-md text-gray-700 font-bold rounded-md px-6 py-4 text-center">
            IT Development
            </div>
        </div>
        </div>
    </section>
{{-- struktur organisasi --}}

@endsection
