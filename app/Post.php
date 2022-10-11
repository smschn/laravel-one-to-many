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

    // aggiungo la relazione one (categories) to many (posts).
    // la funzione ha il nome della tabella con cui sussiste la relazione.
    public function categories() {
        return $this->belongsTo('App\Category'); // ritorno il model della tabella con cui c'è la relazione.
    }
}