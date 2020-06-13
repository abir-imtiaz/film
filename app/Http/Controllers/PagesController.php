<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'WMovies Home';
        return view('pages/index')->with('title', $title);
    }

    public function films(){
        $title = 'Movies';
        return view('pages/films')->with('title', $title);
    }

    public function filmDetails(){

    }
}
