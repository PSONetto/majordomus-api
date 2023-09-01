<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id'
    ];

    protected $guarded = [
        'id',
    ];

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }
}
