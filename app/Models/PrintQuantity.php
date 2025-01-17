<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintQuantity extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantity',
        'price_per_unit',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'price_per_unit' => 'decimal:2',
    ];

    public function orders()
    {
        return $this->hasMany(PublisherOrder::class, 'print_quantity_id');
    }

}
