<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;
use JetBrains\PhpStorm\ArrayShape;


class Order extends Pivot
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'order_date',
        'book_id',
        'customer_id',
        'order_status',
        'quantity',
        'price',
    ];


    #[ArrayShape(['order_date' => 'date', 'order_status' => 'integer'])]
    protected function casts(): array
    {
        return [
            'order_date' => 'date',
            'order_status' => OrderStatus::class,
        ];
    }
}
