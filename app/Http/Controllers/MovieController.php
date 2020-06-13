<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Resources\Movie as MovieResource;
use App\Post;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Post::paginate(3);
        return MovieResource::collection($movies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = $request->isMethod('put') ? Post::findOrFail
        ($request->movie_id) : new Post;

        $movie->id = $request->input('movie_id');
        $movie->name = $request->input('name');
        $movie->description = $request->input('description');
        $movie->release_date = $request->input('release_date');
        $movie->rating = $request->input('rating');
        $movie->ticket_price = $request->input('ticket_price');
        $movie->country = $request->input('country');
        $movie->genre = $request->input('genre');

        if ($movie->save()) {
            return new MovieResource($movie);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Post::findOrFail($id);
        return new MovieResource($movie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Post::findOrFail($id);
        if ($movie->delete()) {
            return new MovieResource($movie);
        }
    }
}
