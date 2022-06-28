<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class cat extends Authenticatable
{
    protected $fillable = [
        'username', 'product_id', 'product',
    ];
}
