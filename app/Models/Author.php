<?php

namespace App\Models;

use App\Enums\Nationality;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use JetBrains\PhpStorm\ArrayShape;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'email',
        'DOB',
        'death_date',
        'bio',
        'nationality',
        'website',
        'image',

    ];

    public function books(): BelongsToMany {
        return $this->belongsToMany(Book::class,'book_author');
    }

    #[ArrayShape(['nationality' => "integer"])]
    protected function casts(): array
    {
        return [
            'nationality' => Nationality::class,
        ];
    }
}
