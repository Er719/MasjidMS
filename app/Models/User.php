<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use CrudTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //one-to-one relationship with the Profile model
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    //one-to-many relationship with the Donation model
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    //one-to-many relationship with the Event model
    public function events()
    {
        return $this->hasMany(Event::class);
    }

    //one-to-many relationship with the EducationalResource model
    public function educationalresources()
    {
        return $this->hasMany(EducationalResource::class);
    }
}
