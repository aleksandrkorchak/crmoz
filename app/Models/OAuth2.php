<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OAuth2 extends Model
{
    use HasFactory;

    protected $table = 'oauth2';

    protected $casts = [
        'access_token_expire_at' => 'datetime',
    ];

}
