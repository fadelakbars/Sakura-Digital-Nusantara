@extends('app')

@section('title', 'Profil')

@section('content')

{{-- herosection --}}

    <section class="bg-white dark:bg-gray-900">
        <div class="flex flex-wrap justify-center p-20">

            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Sakura Journal List</h5>
                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Sakura saat ini menerbitkan {{ $jumlahjurnal }} jurnal yang telah melalui proses peer-review.</p>
            </div>
            
        </div>
    </section>
{{-- herosection --}}

{{-- tabel daftar jurnal --}}
<section class="bg-white dark:bg-gray-900">
    <div class="p-20 justify-center">

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
        <div class="relative mb-5">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
            </div>
            <input type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for journal">
        </div>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama Jurnal
                </th>
                <th scope="col" class="px-6 py-3">
                    ISSN
                </th>
                <th scope="col" class="px-6 py-3">
                    Online ISSN
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @if (isset($jurnals))
                @foreach ($jurnals as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10" src={{ asset('storage/' . $item->image) }} alt="Jese image">
                            <div class="ps-3">
                                <div class="text-base font-semibold">{{ $item->journalcname }}</div>
                                <div class="font-normal text-gray-500">{{ $item->kepanjangan }}</div>
                            </div>  
                        </th>
                        <td class="px-6 py-4">
                            <a href="{{ $item->link_pissn }}" class="font-medium text-black dark:text-blue-500 hover:underline">{{ $item->pissn }}</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ $item->link_eissn }}" class="font-medium text-black dark:text-blue-500 hover:underline">{{ $item->eissn }}</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ $item->link }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Journal</a>
                            <SPan> | </SPan>
                            <a href="{{ $item->courrent_issue }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Current Issue</a>
                        </td>
                    </tr>        
                @endforeach
            @else
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-10" src={{ asset('img/jupiter.png') }} alt="Jese image">
                        <div class="ps-3">
                            <div class="text-base font-semibold">JUPITER</div>
                            <div class="font-normal text-gray-500">Jurnal Pendidikan Terapan</div>
                        </div>  
                    </th>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">ISSN</a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">EISSN</a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Journal</a>
                        <SPan> | </SPan>
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Current Issue</a>
                    </td>
                </tr>
            @endif
            
        </tbody>
    </table>
</div>

        
    </div>

</section>
{{-- tabel daftar jurnal --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("table-search-users");
        const tableRows = document.querySelectorAll("tbody tr");

        searchInput.addEventListener("input", function(e) {
            const searchQuery = e.target.value.toLowerCase();

            tableRows.forEach(row => {
                const rowText = row.textContent.toLowerCase();
                if (rowText.includes(searchQuery)) {
                    row.style.display = ""; // Tampilkan baris jika cocok
                } else {
                    row.style.display = "none"; // Sembunyikan baris jika tidak cocok
                }
            });
        });
    });
</script>

@endsection
