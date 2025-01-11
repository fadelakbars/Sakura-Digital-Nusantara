<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurnitinOrder extends Model
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
        return 'SDN/'.'Turnitin/' . $year . '/' . str_pad($newNumber, 5, '0', STR_PAD_LEFT);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_name',
        'client_email',
        'client_phone',
        'document_title',
        'document_path',
        'invoice_number',
        'invoice_path',
        'status',
        'total_price',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'total_price' => 'decimal:2',
    ];
}
