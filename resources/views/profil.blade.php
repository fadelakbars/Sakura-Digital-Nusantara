@extends('app')

@section('title', 'Profil')

@section('content')

<section  class="bg-white dark:bg-gray-900">
    <div class="p-10">

        <div class="flex flex-col items-center">
            <!-- Root Node -->
            <div class="flex items-center">
                <div class="bg-blue-500 text-white font-bold py-2 px-4 rounded shadow-lg">
                    Direktur Utama
                </div>
            </div>

            <!-- Level 1 -->
            <div class="flex justify-center items-center mt-4">
                <div class="relative flex flex-col items-center">
                    <div class="w-0 h-4 border-l-2 border-gray-300"></div>
                    <div class="bg-gray-200 text-gray-700 font-medium py-2 px-4 rounded shadow-lg">
                        Manajer Keuangan
                    </div>
                    <div class="flex mt-2 space-x-4">
                        <div class="flex flex-col items-center">
                            <div class="w-0 h-4 border-l-2 border-gray-300"></div>
                            <div class="bg-gray-100 text-gray-500 font-medium py-2 px-4 rounded shadow">
                                Staff Keuangan 1
                            </div>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-0 h-4 border-l-2 border-gray-300"></div>
                            <div class="bg-gray-100 text-gray-500 font-medium py-2 px-4 rounded shadow">
                                Staff Keuangan 2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative flex flex-col items-center mx-8">
                    <div class="w-0 h-4 border-l-2 border-gray-300"></div>
                    <div class="bg-gray-200 text-gray-700 font-medium py-2 px-4 rounded shadow-lg">
                        Manajer Operasional
                    </div>
                    <div class="flex mt-2 space-x-4">
                        <div class="flex flex-col items-center">
                            <div class="w-0 h-4 border-l-2 border-gray-300"></div>
                            <div class="bg-gray-100 text-gray-500 font-medium py-2 px-4 rounded shadow">
                                Staff Operasional 1
                            </div>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-0 h-4 border-l-2 border-gray-300"></div>
                            <div class="bg-gray-100 text-gray-500 font-medium py-2 px-4 rounded shadow">
                                Staff Operasional 2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

@endsection