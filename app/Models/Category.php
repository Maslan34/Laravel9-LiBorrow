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





    #ONE TO MANY  Inverse

    public function parent(){

        return $this->belongsTo(Category::class, 'parent_id');

    }

    #ONE TO MANY  Inverse


    #ONE TO MANY

    public function children(){

        return $this->hasMany(Category::class, 'parent_id');

    }

    #ONE TO MANY
}
