<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Comment;

class Contact extends Model
{
    //
    use HasFactory;
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
