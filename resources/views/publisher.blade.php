@extends('app')

@section('title', 'Sakura Publisher')
    
@section('content')

{{-- jumbotron --}}
    <section class="bg-white dark:bg-gray-900 mb-28">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1 class="mb-4 mt-8 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Sakura Publisher</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Penerbit Nasional yang berfokus pada buku-buku akademik independen, kami profesional dalam menyebarluaskan hasil penelitian para peneliti Indonesia secara nasional dan global. Kami menawarkan kesempatan bagi penelitian dan pelaku pendidikan untuk mencapai komunitas akademik, dengan komitmen konsisten terhadap kualitas dan inovasi serta diseminasi melalui indeks portal akademik.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                {{-- <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Daftar Menerbitkan Buku
                </button> --}}
                <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Daftar Menerbitkan Buku
                </button>
            </div>
        </div>
    </section>
{{-- jumbotron --}}

{{-- layanan --}}
    <section class="bg-white dark:bg-gray-900 mb-10">
        <h1 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-4xl dark:text-white text-center">Layanan</h1>
        <div class="flex flex-wrap justify-center gap-4 p-4">
            <p class="mb-5 px-10 text-center text-gray-500 sm:text-lg dark:text-gray-400">Layanan kami sebagai penerbit nasional menawarkan platform profesional untuk penerbitan buku akademik independen, media elektronik, dan jurnal ilmiah. Dengan fokus utama pada penyebarluasan hasil penelitian para peneliti Indonesia, kami memberikan keunggulan dalam kualitas, inovasi, dan jangkauan komunitas akademik.</p>
            
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Parafrase</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Tingkatkan kualitas tulisan Anda dengan layanan parafrase profesional. Kami membantu Anda menyusun ulang teks tanpa mengubah makna.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Pelajari Lebih Lanjut
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>

            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Penerbitan Buku</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Wujudkan karya Anda menjadi buku dengan ISBN resmi. Kami mendukung penerbitan buku akademik dan literasi.</p>
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Terbitkan Buku
                </button>
            </div>

            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pemasaran Buku</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Perluas jangkauan pembaca dengan strategi pemasaran buku kami. Kami membantu Anda mempromosikan karya Anda secara maksimal.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Pelajari Lebih Lanjut
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Proofreading</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pastikan naskah Anda bebas dari kesalahan dengan layanan proofreading kami. Akurasi dan kejelasan adalah prioritas kami.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Periksa Sekarang
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>

            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pengurusan HKI</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lindungi karya intelektual Anda dengan layanan pengurusan Hak Kekayaan Intelektual (HKI) yang mudah dan cepat.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Daftarkan Sekarang
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>

            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Turnitin</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pastikan orisinalitas tulisan Anda dengan layanan pemeriksaan plagiarisme menggunakan Turnitin. Akurat dan terpercaya.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Cek Plagiarisme
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>

        </div>
    </section>
{{-- layanan --}}

{{-- harga --}}
    <section class="bg-white dark:bg-gray-900">
        <h1 class="text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-4xl dark:text-white text-center">Pricing</h1>

        <div class="flex flex-wrap justify-center gap-4 p-10">

            <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Paket A 100-250 Lembar</h5>
                <div class="flex items-baseline text-gray-900 dark:text-white">
                    <span class="text-3xl font-semibold">Rp.</span>
                    <span class="text-5xl font-extrabold tracking-tight">450 rb</span>
                    <span class="ms-1 text-xl font-normal text-gray-500 dark:text-gray-400">/buku</span>
                </div>
                <ul role="list" class="space-y-5 my-7">
                    <!-- Feature 1 -->
                    <li class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Desain Cover</span>
                    </li>
            
                    <!-- Feature 2 -->
                    <li class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Layouting</span>
                    </li>
            
                    <!-- Feature 3 -->
                    <li class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">ISBN dan Barcode</span>
                    </li>
            
                    <li class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">E-Book</span>
                    </li>

                    <li class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Sertifikat</span>
                    </li>

                    <li class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Turnitin</span>
                    </li>

                    <li class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Proof Reading (Max 250 lembar)</span>
                    </li>

                    <li class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Publikasi e-commercre dan social media (sharing fee)</span>
                    </li>
                    <!-- Feature 4 (Strikethrough) -->
                    {{-- <li class="flex line-through decoration-gray-500">
                        <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 ms-3">Sketch E-Book</span>
                    </li> --}}
                </ul>
            </div>

            <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Paket B 250-500 Lembar</h5>
                <div class="flex items-baseline text-gray-900 dark:text-white">
                    <span class="text-3xl font-semibold">Rp.</span>
                    <span class="text-5xl font-extrabold tracking-tight">550 rb</span>
                    <span class="ms-1 text-xl font-normal text-gray-500 dark:text-gray-400">/buku</span>
                </div>
                <ul role="list" class="space-y-5 my-7">
                    <!-- Feature 1 -->
                    <li class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Desain Cover</span>
                    </li>
            
                    <!-- Feature 2 -->
                    <li class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Layouting</span>
                    </li>
            
                    <!-- Feature 3 -->
                    <li class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">ISBN dan Barcode</span>
                    </li>
            
                    <li class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">E-Book</span>
                    </li>

                    <li class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Sertifikat</span>
                    </li>

                    <li class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Turnitin</span>
                    </li>

                    <li class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Proof Reading (Max 550 lembar)</span>
                    </li>

                    <li class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Publikasi e-commercre dan social media (sharing fee)</span>
                    </li>
                    <!-- Feature 4 (Strikethrough) -->
                    {{-- <li class="flex line-through decoration-gray-500">
                        <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 ms-3">Sketch E-Book</span>
                    </li> --}}
                </ul>
            </div>
            
            
        </div>
    </section>
{{-- harga --}}

{{-- modal order buku --}}
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Daftar menerbitkan buku
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            
            <form method="POST" action="/publisher-order" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="client_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="client_name" id="client_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Lengkap beserta gelar" required="">
                    </div>
                    <div>
                        <label for="book_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                        <input type="text" name="book_title" id="book_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Judul Buku" required="">
                    </div>
                    {{-- <div>
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="client_email" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="customer@gmail.com" required="">
                    </div> --}}
                    <div>
                        <label for="client_gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                        <select id="client_gender" name="client_gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div>
                        <label for="client_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Whatsapp</label>
                        <input type="email" name="client_phone" id="client_phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0812345678" required="">
                    </div>
                    <div>
                        <label for="client_job_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                        <input type="text" name="client_job_title" id="client_job_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Penulis, Peneliti" required="">
                    </div>

                    <div>
                        <label for="client_institution" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Institusi</label>
                        <input type="text" name="client_institution" id="client_institution" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contoh CV. Sakura Digital" required="">
                    </div>
                    <div>
                        <label for="service_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Layanan</label>
                        <select id="service_type" name="service_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($layananpublikasi as $item)
                                <option value={{ $item->id }}>{{ $item->package_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="book_size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paket Penerbitan</label>
                        <select id="book_size" name="book_size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($paketbukuu as $paket)
                                <option value={{ $paket->id }}>{{ $paket->page_rage }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="print_qunaitity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Cetakan</label>
                        <input type="number" name="print_qunaitity" id="print_qunaitity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="jumlah buku yang ingin dicetak diluar">
                    </div>
                    <div>
                        <label for="manuscript_path" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Manuskrip</label>
                        <input type="file" name="manuscript_path" id="manuscript_path" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contoh CV. Sakura Digital" required="">
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Kirim
                </button>
            </form>

        </div>
    </div>
</div>
{{-- modal order buku --}}

{{-- modal order publish buku --}}

{{-- modal order publish buku --}}

{{-- katalog --}}
    <section class="bg-white dark:bg-gray-900">
        <h1 class="mb-1 mt-10 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-4xl dark:text-white text-center">Katalog</h1>
        <div class="flex flex-wrap justify-center gap-4 p-10">
            <p class="mb-5 px-10 text-center text-gray-500 sm:text-lg dark:text-gray-400">Buku populer kami menawarkan pengalaman mendalam dan mendidik kepada pembaca dengan berbagai topik yang menginspirasi dan relevan. Dikemas dengan gaya penulisan yang memikat dan aksesible, buku-buku ini memadukan keahlian penulis dengan kebutuhan dan minat pembaca modern.</p>

            @if (isset($books) && $books->isNotEmpty())
                @foreach ($books as $book)
                <a href={{ url('/buku/'.$book->id, []) }}>
                    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <img class="p-8 rounded-t-lg" src={{ asset('storage/' . $book->cover_image) }} alt="product image" />
                            <div class="px-5 pb-5">
                                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $book->title }}</h5>
                                <div class="flex items-center justify-between">
                                    <span class="text-3xl font-bold text-gray-900 dark:text-white">Rp. {{ $book->price }}</span>
                                    <a href="{{ $book->link }}" target="blank" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                                </div>
                            </div>
                        </div>
                </a>
                @endforeach
            @else
                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg" src={{ asset('img/8.jpg') }} alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/satu">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Transformasi Perpajakan Abad 21: Meningkatkan Kepatuhan Wajib Pajak di Era Ekonomi Digital</h5>
                        </a>
                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">Rp. 60.000</span>
                            <a href="/dua" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
{{-- katalog --}}

{{-- e-commerce --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="flex flex-wrap justify-center p-20">

            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Terhubung dengan Toko Kami</h5>
                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Temukan koleksi lengkap kami di Shopee dan Tokopedia. Nikmati kemudahan berbelanja kapan saja dan di mana saja.</p>
                <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                    <a href={{ url('https://shopee.co.id/sakura_publisher', []) }} class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <img src="img/shopee.png" alt="Tokopedia Mascot" class="me-3 w-10 h-10">
                        <div class="text-left rtl:text-right">
                            <div class="mb-1 text-xs">Belanja di</div>
                            <div class="-mt-1 font-sans text-sm font-semibold">Shopee</div>
                        </div>
                    </a>
                    <a href={{ url('https://www.tokopedia.com/sakurapublisher', []) }} class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <img src="img/Tokopedia_Mascot.png" alt="Tokopedia Mascot" class="me-3 w-10 h-10">
                        <div class="text-left rtl:text-right">
                            <div class="mb-1 text-xs">Belanja di</div>
                            <div class="-mt-1 font-sans text-sm font-semibold">Tokopedia</div>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
    </section>
{{-- e-commerce --}}

@endsection