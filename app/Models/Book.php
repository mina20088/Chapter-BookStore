<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\DocBlock\Tags\Method;


/**
 * @method static where(string $string, int $int)
 * @method static create(array $book)
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

    protected static function booted(): void
    {
        static::saving(function ($book)
        {
            if($book->slug == null){
                $book->slug = Str::slug($book->title);
            }
        });
    }

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
        return $this->belongsToMany(Author::class,'book_author')->withTimestamps();
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

    public function inventorys(): HasMany
    {
        return $this->hasMany(Inventory::class);
    }

    public function reviewed(): BelongsToMany
    {
        return $this
            ->belongsToMany(User::class,'reviews')
            ->withPivot('user_id','book_id','title','ratings')
            ->withTimestamps();
    }


    protected function slug():Attribute
    {
        return Attribute::make(
            set: fn($value) => Str::slug($value),
        );
    }



}
