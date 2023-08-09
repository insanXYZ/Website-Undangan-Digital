<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Carbon\Carbon;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($post)
    {
        $posts = Post::where('slug', $post)->first();

        if ($posts === null) {
            return abort(404);
        }

        $akad = Carbon::createFromFormat('Y-m-d', $posts->tanggal_akad);
        $formattedAkad = $akad->translatedFormat('l, j F Y');
        $resepsi = Carbon::createFromFormat('Y-m-d', $posts->tanggal_resepsi);
        $formattedResepsi = $resepsi->translatedFormat('l, j F Y');

        return view('modelCard/'.$posts->model, [
            'posts' => $posts,
            'tanggal_akad' => $formattedAkad,
            'tanggal_resepsi' => $formattedResepsi,
        ]);

    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'nama' => 'required',
            'post_id' => 'required',
            'body' => 'required|max:255',
            'status' => '',
        ]);

        if ($request->has('parent_id')) {
            $validation['parent_id'] = $request->parent_id;
        }

        Comment::create($validation);
    }
}
