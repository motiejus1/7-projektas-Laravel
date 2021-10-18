<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //Kad autorius turi daug knygu?
    public function authorBooks() {
        return $this->hasMany(Book::class, 'author_id', 'id');
    }
}
