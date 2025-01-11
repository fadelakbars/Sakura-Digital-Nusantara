<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublisherOrder extends Model
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
        return 'SDN/'.'Book/' . $year . '/' . str_pad($newNumber, 5, '0', STR_PAD_LEFT);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_name',
        'book_title',
        'client_email',
        'client_phone',
        'client_gender',
        'client_birthdate',
        'client_job_title',
        'client_institution',
        'manuscript_path', 
        'print_qunaitity', 
        'price_per_unit',
        'invoice_number', //bukan user
        'invoice_path', //bukan user 
        'status', //bukan user
        'package_id', 
        'price_range_id', 
        'print_quantity_id', 
        // 'book_hki_price_id', 
        'total_price',//bukan user
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'client_birthdate' => 'date',
        'total_price' => 'decimal:2',
    ];

    public function package()
    {
        return $this->belongsTo(PublisherPackage::class, 'package_id');
    }

    /**
     * Get the price range associated with the order.
     */
    public function priceRange()
    {
        return $this->belongsTo(PriceRange::class, 'price_range_id');
    }

    /**
     * Get the print quantity associated with the order.
     */
    public function printQuantity()
    {
        return $this->belongsTo(PrintQuantity::class, 'print_quantity_id');
    }

}
