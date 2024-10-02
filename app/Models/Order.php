<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;
use JetBrains\PhpStorm\ArrayShape;


/**
 * @method static find(int $id)
 */
class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_date',
        'user_id',
        'order_status',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public static function truncate(): null
    {
        return DB::table('orders')->truncate();
    }

    #[ArrayShape(['order_date' => 'date', 'order_status' => 'integer'])]
    protected function casts(): array
    {
        return [
            'order_date' => 'date',
            'order_status' => OrderStatus::class,
        ];
    }
}
