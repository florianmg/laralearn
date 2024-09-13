<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $posts = Post::paginate(25);
        return view('blog.index', compact('posts'));
    }

    public function show(string $slug, string $id): View
    {
        $post = Post::findOrFail($id);
        return view('blog.show', compact('post'));
    }
}
