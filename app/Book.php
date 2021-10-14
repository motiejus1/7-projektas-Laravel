<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    //funkcija mums grazina visa DB informacija apie autoriu
    public function bookAuthor() {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }
}
