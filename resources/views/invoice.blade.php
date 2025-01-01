<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        @page {
            size: A4;
            margin: 20mm;
        }
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
        }
        .header img {
            max-width: 100px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
            text-align: left;
        }
        .header p {
            margin: 0;
            font-size: 14px;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            font-size: 12px;
        }
        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        .total {
            text-align: right;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            {{-- <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/SWS-Logo.png'))) }}" alt="Logo"> --}}
            <div>
                <h1>Sakura Digital Nusantara</h1>
                <p>Jl. Biola Raya J148 Perumnas Antang, Kelurahan Manggala, Makassar</p>
            </div>
        </div>

        <!-- Invoice Details -->
        <h2 style="margin-bottom: 10px; font-size: 18px; font-weight: bold;">Invoice</h2>
        <p><strong>Nomor:</strong> {{ $invoice->invoice_number }}</p>
        <p><strong>Tanggal:</strong> {{ $invoice->created_at->format('d F Y') }}</p>

        <!-- Detail Pemesan -->
        <h3 style="margin-bottom: 10px; font-size: 16px;">Detail Pemesan</h3>
        <table>
            <tr>
                <th>Nama</th>
                <td>{{ $invoice->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $invoice->email }}</td>
            </tr>
            <tr>
                <th>Telepon</th>
                <td>{{ $invoice->phone }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $invoice->address }}</td>
            </tr>
        </table>

        <!-- Detail Layanan -->
        <h3 style="margin-bottom: 10px; font-size: 16px;">Detail Layanan</h3>
        <table>
            <tr>
                <th>Layanan</th>
                <td>{{ $invoice->service_type }}</td>
            </tr>
            <tr>
                <th>Ukuran Buku</th>
                <td>{{ $invoice->book_size }}</td>
            </tr>
            <tr>
                <th>Jumlah Cetakan</th>
                <td>{{ $invoice->print_quantity }}</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>IDR {{ number_format($invoice->amount, 2) }}</td>
            </tr>
        </table>

        <!-- Total -->
        <div class="total">
            Total: IDR {{ number_format($invoice->amount, 2) }}
        </div>
    </div>
</body>
</html>
