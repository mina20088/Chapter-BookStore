<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderItems extends pivot
{
    use HasFactory;

    public $incrementing = true;

    protected $table = 'order_items';

    protected $fillable = [
        'order_id',
        'book_id',
        'quantity',
        'price',
    ];


}
