<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Method;


/**
 * @method static where(string $string, int $int)
 */
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

    public static function truncate(): null
    {
       return  DB::table('books')->truncate();
    }

    public function genre(): BelongsTo{
        return $this->belongsTo(Genre::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'book_user');
    }
    public function authors(): BelongsToMany
    {
        return $this->belongsToMany(Author::class,'book_author');
    }

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }

    public function orders() : BelongsToMany
    {
        return $this
            ->belongsToMany(Order::class,'order_items', 'book_id', 'order_id')
            ->using(OrderItems::class)
            ->withPivot('quantity', 'price');
    }
}
