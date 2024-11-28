<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    //
    public function films() {
        $movies = Movie::paginate(6);
        
        return view("pages.films", data: ['movies'=>$movies]);
    }
}