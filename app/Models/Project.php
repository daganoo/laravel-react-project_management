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

    public function createdBy()
    {
        //conect projects with task
        return $this->belongsTo(User::class ,'created_by');
    }

    public function updatedBy()
    {
        //conect projects with task
        return $this->belongsTo(User::class ,'updated_by');
    }
}  

   