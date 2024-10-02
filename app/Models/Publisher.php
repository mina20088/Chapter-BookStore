<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Publisher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nationality',
        'email',
        'phone_number',
        'address_1',
        'address_2',
        'type',
        'website_url',
        'year_founded',
        'comments'
    ];

    public static function truncate(): null
    {
        return DB::table('publishers')->truncate();
    }

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }


}
