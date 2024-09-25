<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "type",
        "house-number/building-number",
        "street-name",
        "unit/apartment-number",
        "building-name/complex-name",
        "floor/level-number",
        "suite/office-number",
        "landmark/point-of-reference",
        "city",
        "state/province/region",
        "zip-code",
        "country",
    ];
}
