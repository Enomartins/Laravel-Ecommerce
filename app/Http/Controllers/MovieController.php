<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Movie;

class MovieController extends Controller
{
    
    public function index() {

        $movies = Movie::all();

        return view('/welcome', compact('movies'));
    }
    
    public function create() {
        return view('movie.create');
    }

    public function show($movieid) {

        $movie = Movie::find($movieid);

        return view('movie.show', compact('movie'));

    }

    public function store(Request $request) {

        
         // ensure the request has a file before we attempt anything else.
         if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png,jpg', // Only allow .jpg, .bmp and .png file types.
                'title' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string', 'max:255'],
                'price' => ['required', 'numeric'],
                'genre' => ['required', 'string', 'max:255'],
                'quantity' => ['required', 'numeric'],
            ]);

            

            // Store the record, using the new file hashname which will be it's new filename identity.
            $movie = new Movie([
                "title" => $request->get('title'),
                "description" => $request->get('description'),
                "price" => $request->get('price'),
                "genre" => $request->get('genre'),
                "quantity" => $request->get('quantity'),
                "image" => $request->file->hashName()
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('movies', 'public');
            
            $movie->save(); // Finally, save the record.
            return redirect('admin');
        }

    }

    public function edit($movieid) {

        $movie = Movie::find($movieid);

        return view('movie.edit', compact('movie'));
    }

    
    public function update(Request $request, $movieid) {

        $movie = Movie::find($movieid);

        $movie->update($request->all());
        return redirect()->route('movie.index');
        
    }

    
    public function destroy($movie) {

        $movie = Movie::find($movie);

        $movie->delete();
        return redirect()->route('admin');
        
    }

    public function search(Request $request) {

        $search = $request->search;

        $movies = Movie::query()
                ->where('title', 'LIKE', "%{$search}%") 
                ->orWhere('description', 'LIKE', "%{$search}%") 
                ->get();

        return view('/welcome', compact('movies'));        
    }


    //Admin page
    public function admin() {

        $movies = Movie::all();

        return view('/admin/home', compact('movies'));
    }



}
