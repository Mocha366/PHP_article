<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = \Auth::user()->articles()->orderBy('created_at', 'desc')->get();
        $data = [
            'articles' => $articles,
        ];
        return view('home', $data);
    }
}
