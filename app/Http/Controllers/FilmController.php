<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    //
    public function create(){
        $genres = Genre::all();

        return view("pages.create", data: ['genres'=>$genres]);
    }

    public function store(Request $request){
        // validasi
        $validated = $request->validate([
            'genre_id' => 'required|exists:genres,id',
            'title' => 'required|max:40',
            'photo'=> 'required|image|max:100',
            'publish_date'=> 'required|date',
            'description'=> 'required|max:250'
        ]);

        // store into db
        $movie = new Movie();
        $movie->genre_id = $request->genre_id;
        $movie->title = $request->title;
        
        if ($request->hasFile('photo')) {
            $fileName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('uploads'), $fileName);
            $movie->photo = $fileName;
        }

        $movie->publish_date = $request->publish_date;
        $movie->description = $request->description;
        $movie->save();
        
        return back()->with('success', true);
    }
    public function index()
    {
        // Ambil semua data movie dengan genre
        $movies = Movie::with('genre')->get();

        return view('movies.index', compact('movies'));
    }
}
