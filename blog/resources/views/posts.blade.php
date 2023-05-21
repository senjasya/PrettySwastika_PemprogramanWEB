
@extends('tamplates.main')
@section('title','POST')


@section('container')
    <h1 class="mb-4">POST</h1>

    @foreach ($posts as $post)
        <article class="mb-3 border-bottom">
            <a class="text-decoration-none" href="/posts/{{$post['slug']}}">
                <h1>{{$post['title']}}</h1>
            </a>
            <p>By : <a href="">{{$post->user->name}}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{$post['excerpt']}}</p>
            <p><a href="/posts/{{$post['slug']}}" class="text-decoration-none">Read Me</a></p>
        </article>
    @endforeach
@endsection
