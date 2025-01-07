<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        @page {
            size: A4;
            margin: 15mm;
        }
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            margin: 0 auto;
            padding: 10px;
            background-color: #fff;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
        }
        .header .company-info h1 {
            margin: 0;
            font-size: 20px;
            font-weight: bold;
        }
        .header .company-info p {
            margin: 0;
            font-size: 12px;
            color: #555;
        }
        .header .contact-info p {
            margin: 0;
            font-size: 12px;
            color: #555;
            text-align: right;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            font-size: 11px;
        }
        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        .total {
            text-align: right;
            font-size: 14px;
            font-weight: bold;
            margin-top: 10px;
        }
        .payment-info {
            margin-top: 20px;
            font-size: 12px;
        }
        .payment-info h3 {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 10px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
        }
        .payment-info .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 5px;
            background-color: #f9f9f9;
        }
        .payment-info .card p {
            margin: 0;
            font-size: 11px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="company-info">
                <h1>Sakura Digital Nusantara</h1>
                <p>Jl. Biola Raya J148 Perumnas Antang, Kelurahan Manggala, Makassar</p>
            </div>
            <div class="contact-info">
                <p>+628114101349</p>
                <p>publishersakura@gmail.com</p>
            </div>
        </div>

        <!-- Invoice Details -->
        <h2 style="margin-bottom: 10px; font-size: 16px; font-weight: bold;">Invoice</h2>
        <p><strong>Nomor:</strong> {{ $invoice->invoice_number }}</p>
        <p><strong>Tanggal:</strong> {{ $invoice->created_at->format('d F Y') }}</p>

        <!-- Detail Pemesan -->
        <h3 style="margin-bottom: 10px; font-size: 14px;">Detail Pemesan</h3>
        <table>
            <tr>
                <th>Nama</th>
                <td>{{ $invoice->client_name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $invoice->client_email }}</td>
            </tr>
            <tr>
                <th>Telepon</th>
                <td>{{ $invoice->client_phone }}</td>
            </tr>
            <tr>
                <th>Profesi</th>
                <td>{{ $invoice->client_job_title }}</td>
            </tr>
        </table>

        <!-- Detail Layanan -->
        <h3 style="margin-bottom: 10px; font-size: 14px;">Detail Layanan</h3>
        <table>
            <tr>
                
                <th>Layanan</th>
                <td>{{ $invoice->package_id }}</td>
            </tr>
            <tr>
                <th>Ukuran Buku</th>
                <td>{{ $invoice->price_range_id }}</td>
            </tr>
            <tr>
                <th>Jumlah Cetakan</th>
                <td>{{ $invoice->print_quantity_id }}</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>IDR {{ number_format($invoice->total_price, 2) }}</td>
            </tr>
        </table>

        <!-- Total -->
        <div class="total">
            Total: IDR {{ number_format($invoice->total_price, 2) }}
        </div>

        <!-- Payment Info -->
        <div class="payment-info">
            <h3>Informasi Pembayaran</h3>
            <div class="card">
                <p><strong>Bank BCA:</strong> 123-456-7890</p>
                <p>Atas Nama: Sakura Digital Nusantara</p>
            </div>
            <div class="card">
                <p><strong>Bank Mandiri:</strong> 987-654-3210</p>
                <p>Atas Nama: Sakura Digital Nusantara</p>
            </div>
            <div class="card">
                <p><strong>E-Wallet Gopay:</strong> 0812-3456-7890</p>
                <p>Atas Nama: Sakura Digital Nusantara</p>
            </div>
        </div>
    </div>
</body>
</html>
