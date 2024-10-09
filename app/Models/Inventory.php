<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'condition',
        'discount_id',
        'quantity',
        'price',
    ];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}
