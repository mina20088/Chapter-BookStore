<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function books ():hasMany
    {
        return $this->hasMany(Book::class);
    }
}
