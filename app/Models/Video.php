<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guard = [];
    protected $fillable = ['title'];
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
