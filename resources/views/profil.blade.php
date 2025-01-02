@extends('app')

@section('title', 'Profil')

@section('content')

<section class="bg-white dark:bg-gray-900">
    <div class="p-10 mb-40">
        <div class="flex flex-col items-center space-y-8">
            <!-- Root Level -->
            <div class="flex items-center">
                <div class="bg-blue-500 text-white font-bold py-3 px-6 rounded-lg shadow-lg text-lg">
                    Direktur
                </div>
            </div>

            <!-- Level 1 -->
            <div class="flex justify-center items-center space-x-16">
                <div class="flex flex-col items-center">
                    <div class="w-0 h-6 border-l-2 border-gray-300"></div>
                    <div class="bg-gray-300 text-gray-700 font-medium py-2 px-5 rounded-lg shadow">
                        Komisaris
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-0 h-6 border-l-2 border-gray-300"></div>
                    <div class="bg-gray-300 text-gray-700 font-medium py-2 px-5 rounded-lg shadow">
                        CEO
                    </div>
                </div>
            </div>

            <!-- Level 2 -->
            <div class="flex justify-center items-center space-x-8">
                <div class="flex flex-col items-center">
                    <div class="w-0 h-6 border-l-2 border-gray-300"></div>
                    <div class="bg-gray-100 text-gray-700 font-medium py-2 px-5 rounded-lg shadow">
                        Divisi Publisher
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-0 h-6 border-l-2 border-gray-300"></div>
                    <div class="bg-gray-100 text-gray-700 font-medium py-2 px-5 rounded-lg shadow">
                        Divisi Journal
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-0 h-6 border-l-2 border-gray-300"></div>
                    <div class="bg-gray-100 text-gray-700 font-medium py-2 px-5 rounded-lg shadow">
                        Application & Data Center
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-0 h-6 border-l-2 border-gray-300"></div>
                    <div class="bg-gray-100 text-gray-700 font-medium py-2 px-5 rounded-lg shadow">
                        IT Development
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
