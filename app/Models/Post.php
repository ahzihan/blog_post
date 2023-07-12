<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [

        'title',
        'details'
    ];

    function postTag(){
        $this->hasMany(PostTag::class);
    }
    function comment(){
        $this->hasMany(Comment::class);
    }
    function user(){
        $this->belongsTo(User::class);
    }
}
