<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre_id',
        'publisher_id',
        'title',
        'ISBN',
        'cover_image',
        'description',
        'excrept',
        'format',
        'pages',
        'language',
        'publication_date',
    ];

    public function genre() :belongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    public function publisher() :belongsTo
    {
        return $this->belongsTo(Publisher::class);
    }

    public function authors():belongsToMany
    {
        return $this->belongsToMany(Author::class,'book_author');
    }



    public function users(): belongsToMany
    {
        return $this->belongsToMany(User::class)->using(Order::class);
    }
}
