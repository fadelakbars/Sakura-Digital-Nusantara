<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @page {
            size: A4;
            margin: 20mm;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .a4-container {
            width: 210mm;
            min-height: 297mm;
            padding: 20mm;
            background: #fff;
            margin: auto;
            border: 1px solid #ddd;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .logo {
            max-width: 120px;
        }
        .company-name {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="a4-container">
        <!-- Header -->
        <div class="header">
            <!-- Logo and Company Name -->
            <div class="flex items-center">
                <img src="{{ asset('img/SWS-Logo.png') }}" alt="Logo" class="logo">
                <div class="ml-4">
                    <h1 class="company-name">Sakura Digital Nusantara</h1>
                    <p class="text-gray-600">Jl. Biola Raya J148 Perumnas Antang, Kelurahan Manggala, Makassar</p>
                </div>
            </div>

            <!-- Invoice Details -->
            <div class="text-right">
                <h2 class="text-lg font-semibold text-gray-700">Invoice</h2>
                <p class="text-gray-600">Nomor: <span class="font-medium">SDN/2025/00001</span></p>
                <p class="text-gray-600">Tanggal: <span class="font-medium">1 Januari 2025</span></p>
            </div>
        </div>

        <!-- Detail Pemesan -->
        <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-700">Detail Pemesan</h2>
            <table class="mt-3">
                <tbody>
                    <tr>
                        <th>Nama</th>
                        <td>Fadhel Akbar Sallang</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>fadhelakbarsallang@gmail.com</td>
                    </tr>
                    <tr>
                        <th>Telepon</th>
                        <td>082334227110</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>Jl. Ketapang 2. No 3, Kota Makassar</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Detail Layanan -->
        <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-700">Detail Layanan</h2>
            <table class="mt-3">
                <tbody>
                    <tr>
                        <th>Layanan</th>
                        <td>Penerbitan dan Pemasaran Buku</td>
                    </tr>
                    <tr>
                        <th>Ukuran Buku</th>
                        <td>220 Halaman</td>
                    </tr>
                    <tr>
                        <th>Jumlah Cetakan</th>
                        <td>15</td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>IDR 450.000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Total -->
        <div class="text-right text-lg font-semibold text-gray-800">
            Total: IDR 150.000.000
        </div>
    </div>
</body>
</html>
