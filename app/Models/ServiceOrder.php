<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    use HasFactory;

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
