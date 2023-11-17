<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function post(){

        return $this->belongsTo(Post::class);
    }

    public function likes(){


        return $this->morphMany(Like::class,"likeable");
    }

    public function replies(){

        return $this->hasMany(Comment::class);
    }

    public function parent(){

        return $this->belongsTo(Comment::class);
    } 
}
