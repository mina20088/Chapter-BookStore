<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use JetBrains\PhpStorm\ArrayShape;
use App\Enums;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'gender',
        'DOB',
        'active',
        'address_1',
        'address_2',
        'phone_number'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public static function truncate()
    {
        return DB::table('users')->truncate();
    }

   //model Relations
    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, 'book_user');
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function review(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, 'reviews')
            ->withPivot('user_id','book_id','title','ratings')
            ->withTimestamps();
    }

    public function getAgeAttribute(): int
    {
        return Carbon::parse($this->attributes['birthdate'])->age;
    }



    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    #[ArrayShape(['email_verified_at' => "string", 'password' => "string",'active' => "bool", 'gender' => "integer"])]
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'active' => Enums\ActiveEnum::class,
            'gender' => Enums\Gender::class,
        ];
    }


}
