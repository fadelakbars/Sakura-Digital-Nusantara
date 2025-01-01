<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->invoice_number = self::generateInvoiceNumber();
        });
    }

    public static function generateInvoiceNumber()
    {
        // Ambil tahun saat ini
        $year = date('Y');
    
        // Ambil invoice terakhir berdasarkan tahun saat ini
        $latestInvoice = self::where('invoice_number', 'like', "SDN/$year/%")->latest('id')->first();
    
        // Ekstrak angka terakhir dari invoice terbaru, atau mulai dari 1 jika tidak ada
        $lastNumber = $latestInvoice ? intval(substr($latestInvoice->invoice_number, -5)) : 0;
    
        // Tambahkan 1 ke angka terakhir
        $newNumber = $lastNumber + 1;
    
        // Format nomor invoice
        return 'SDN/' . $year . '/' . str_pad($newNumber, 5, '0', STR_PAD_LEFT);
    }
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'book_title',
        'email',
        'phone',
        'date_of_birth',
        'gender',
        'institution',
        'job_title',
        'address',
        'service_type',
        'book_size',
        'print_quantity',
        'invoice_number',
        'amount',
        'pdf_path',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date_of_birth' => 'date',
        'amount' => 'decimal:2',
    ];
}
