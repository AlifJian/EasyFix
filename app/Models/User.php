<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    //
    use SoftDeletes;


    protected $fillable = [
        "name",
        "email",
        "password",
        "phone_number",
        "address"
    ];

    protected $hidden = [
        "password"
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
