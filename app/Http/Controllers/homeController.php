<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;

class homeController extends Controller
{
    public function index()
    {
        return view('home',[
            'posts' => Post::all()->count(),
            'comments' => Comment::all()->count(),
        ]);
        
    }
}
