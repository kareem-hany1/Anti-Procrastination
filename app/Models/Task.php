<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $casts = [
        'due_date' => 'datetime',
    ];
    protected $fillable = [
        'title',
        'description',
        'status',
        'priority',
        'due_date',
        'user_id',
        'remind'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
