@extends('base')

@section('title', 'Blog')

@section('content')
    <h1 class="font-bold text-xl">Blog</h1>
    <ul>
        @foreach($posts as $post)
            <li>
                <a class="underline hover:text-blue-500" href="{{ route('blog.show', ['slug' => $post->slug, 'id' => $post->id]) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
    <div>
        {{ $posts->links() }}
    </div>
@endsection