<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function tags(){

        return $this->belongsToMany(Tags::class,"post_tags","tag_id","post_id");
    }

    public function comments(){

        return $this->morphMany(Comment::class,"commentable");
    }

    public function likes(){

        return $this->morphMany(Like::class,"likeable");
    }
}
