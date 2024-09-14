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

    public function show(Post $post): View
    {
        return view('blog.show', compact('post'));
    }
}
