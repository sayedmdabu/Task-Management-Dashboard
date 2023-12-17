<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status', 'start_date', 'end_date', 'description', 'project_id', 'user_assigned_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function userAssigned()
    {
        return $this->belongsTo(User::class, 'user_assigned_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'task_user');
    }
}
