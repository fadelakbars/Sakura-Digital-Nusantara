<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublisherOrder extends Model
{
    use HasFactory;

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
        'invoice_number', //bukan user
        'invoice_path', //bukan user 
        'status', //bukan user
        'package_id', 
        'price_range_id', 
        'print_quantity_id', 
        'book_hki_price_id', 
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
