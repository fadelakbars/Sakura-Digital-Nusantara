<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProofreadingOrder extends Model
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
        'document_title',
        'document_path',
        'page_count',
        'price_per_page',
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
        'price_per_page' => 'decimal:2',
        'total_price' => 'decimal:2',
    ];
}
