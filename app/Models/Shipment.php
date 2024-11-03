<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        "order_id",
        "estimated_delivery_date",
        "delivery_date",
        "status",
        "cost",
    ];

    public static function truncate(): null
    {
        return DB::table('shipments')->truncate();
    }

}
