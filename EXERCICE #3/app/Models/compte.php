<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as basicAuth;

class compte extends Model implements Authenticatable
{
    use HasFactory;
    use basicAuth;


    protected $hidden = [
        'password',
    ];


}
