<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'slug',
        'category_id' // aggiungere la nuova colonna della foreign key affinché funzioni il metodo fill() dentro la store() del controller dei post.
    ];
}