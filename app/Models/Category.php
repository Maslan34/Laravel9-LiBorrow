<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    #ONE TO MANY RELATIONSHIP with Book

    public function passBookModel(){

        return $this->hasMany(Book::class);

    }

    #ONE TO MANY RELATIONSHIP with Book
}
