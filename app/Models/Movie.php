<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Movie extends Model
{
    //
    use HasFactory;
    public $timestamps = false;
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }
}
