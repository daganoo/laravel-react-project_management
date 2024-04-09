<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    public function tasks()
    {
        //conect projects with task
        return $this->hasMany(Task::class);
    }
}
