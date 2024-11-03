<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

/**
 * @method static create()
 */
class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public static function truncate(): null
    {
        return  DB::table('genres')->truncate();
    }

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }

}
