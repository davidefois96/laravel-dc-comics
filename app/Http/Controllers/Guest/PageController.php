<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index(){

        $comicsNumber = Comic::count();
        $comics = Comic::all();


        return view('home', compact(['comicsNumber','comics']));
    }


}
