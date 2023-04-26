<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsToMany('App\Models\User')
            ->withTimestamps() # Must be added to have Eloquent update the created_at/updated_at columns in a pibot table
            ->withPivot('notes'); # Must also specify any other fields that should be included when fetching this relationship
    }

    public static function findBySlug($slug){
        return self::where('slug', '=', $slug)->first();
    }

    public function isModern()
    {
        return $this->publishd_year > 2000;
    }

    public function isOnList($user){
        //see if this book and user combination is in the book_user table and return true if found
    }

    public function author()
    {
        return $this->belongsTo('App\Models\Author');
    }
}