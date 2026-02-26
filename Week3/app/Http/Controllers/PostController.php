<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 1)->get();
        // Funkcja view() szuka w resources/views
        // 'posts.index' oznacza folder posts -> plik index
        // Drugi argument to tablica: ['nazwa_w_widoku' => $zmienna_lokalna]
        //return view('posts.index', ['posts' => $posts]);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request) // Import: Illuminate\Http\Request
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->is_published = true;
        $post->save(); //INSERT INTO...

        return redirect('/posts'); //Wracamy na liste
    }
}