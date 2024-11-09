<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Support\Facades\DB;

class Reviews extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'book_id',
        'title',
        'ratings',
    ];

    public static function truncate(): null
    {
        return  DB::table('reviews')->truncate();
    }

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

}
