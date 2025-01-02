@extends('app')

@section('title', 'Profil')

@section('content')

<section  class="bg-white dark:bg-gray-900">
    <div class="p-10 mb-40">
        <div class="flex flex-col items-center gap-10">
        
            <!-- Level 1 -->
            <div class="flex flex-col items-center mt-4">
                <div class="w-0 h-4 border-l-2 border-gray-300"></div>
                <div class="bg-gray-200 text-gray-700 font-medium py-2 px-4 rounded shadow-lg">
                    Direktur
                </div>
            </div>
        
            <!-- Level 2 -->
            <div class="flex justify-center items-center mt-4">
                <div class="relative flex flex-col items-center mx-8">
                    <div class="w-0 h-4 border-l-2 border-gray-300"></div>
                    <div class="bg-gray-200 text-gray-700 font-medium py-2 px-4 rounded shadow-lg">
                        Komisaris
                    </div>
                </div>
                <div class="relative flex flex-col items-center mx-8">
                    <div class="w-0 h-4 border-l-2 border-gray-300"></div>
                    <div class="bg-gray-200 text-gray-700 font-medium py-2 px-4 rounded shadow-lg">
                        CEO
                    </div>
                </div>
            </div>
        
            <!-- Level 3 -->
            <div class="flex justify-center items-center mt-4">
                <div class="flex flex-col items-center mx-4">
                    <div class="w-0 h-4 border-l-2 border-gray-300"></div>
                    <div class="bg-gray-100 text-gray-500 font-medium py-2 px-4 rounded shadow">
                        Divisi Publisher
                    </div>
                </div>
                <div class="flex flex-col items-center mx-4">
                    <div class="w-0 h-4 border-l-2 border-gray-300"></div>
                    <div class="bg-gray-100 text-gray-500 font-medium py-2 px-4 rounded shadow">
                        Divisi Journal
                    </div>
                </div>
                <div class="flex flex-col items-center mx-4">
                    <div class="w-0 h-4 border-l-2 border-gray-300"></div>
                    <div class="bg-gray-100 text-gray-500 font-medium py-2 px-4 rounded shadow">
                        Application & Data Center
                    </div>
                </div>
                <div class="flex flex-col items-center mx-4">
                    <div class="w-0 h-4 border-l-2 border-gray-300"></div>
                    <div class="bg-gray-100 text-gray-500 font-medium py-2 px-4 rounded shadow">
                        IT Development
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection