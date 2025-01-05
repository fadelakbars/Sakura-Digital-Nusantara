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
        'client_email',
        'client_phone',
        'client_gender',
        'client_birthdate',
        'client_job_title',
        'client_institution',
        'book_title',
        'manuscript_path',
        'invoice_number',
        'invoice_path',
        'status',
        'package_id',
        'price_range_id',
        'print_quantity_id',
        'total_price',
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
}
