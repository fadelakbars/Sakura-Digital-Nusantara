<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookHkiPrice extends Model
{
    protected $fillable = [
        'book_hki_price'
    ];

    public function orders()
    {
        return $this->hasMany(PublisherOrder::class, 'book_hki_price_id');
    }
}
