<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasNotify extends Model
{
    protected $table = 'hasnotifys';
    protected $fillable = [
        'user_id',
        'status'
    ];
}
