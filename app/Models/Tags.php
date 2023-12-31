<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function post(){

        return $this->belongsToMany(Post::class,"post_tags","post_id","tag_id");
    }
}
