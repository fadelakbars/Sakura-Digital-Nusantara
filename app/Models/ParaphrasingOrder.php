<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParaphrasingOrder extends Model
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
        'text_type',
        'language',
        'word_count',
        'invoice_number',
        'invoice_path',
        'status',
        'package_id',
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
