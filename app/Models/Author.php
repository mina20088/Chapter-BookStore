<?php

namespace App\Models;

use App\Enums\Nationality;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;
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

    public function books(): belongsToMany
    {
        return $this->belongsToMany(Book::class, 'book_author');
    }

    public static function truncate(): null
    {
        return  DB::table('authors')->truncate();
    }


    #[ArrayShape(['nationality' => "integer"])]
    protected function casts(): array
    {
        return [
            'nationality' => Nationality::class,
        ];
    }
}
