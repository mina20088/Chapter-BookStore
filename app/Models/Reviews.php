<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Reviews extends Pivot
{
    use HasFactory;

    protected $table = 'reviews';

    protected $fillable = [
        'user_id',
        'book_id',
        'title',
        'ratings',
    ];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

}
