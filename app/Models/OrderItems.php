<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
class OrderItems extends Model
{
    use HasFactory;

    protected $primaryKey = "id";

    protected $table = "order_items";

    public $incrementing = true;

    protected $fillable = [
        'order_id',
        'book_id',
        'quantity',
        'price',
    ];
}
