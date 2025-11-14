<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'title',
        'status',
        'due_date',
        'user_id'
    ];

    protected $casts = ['due_date'=>'datetime'];

    public function steps() {
        return $this->HasMany(Step::class, 'project_id', 'id');
    }

}
