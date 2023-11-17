<?php

namespace App\Models;
use App\Models\User;
use App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function post(){

        return $this->belongsTo(Post::class);
    }

    public function comments(){

        return $this->belongsTo(Comment::class);
    }
}
