
@extends('tamplates.main')
@section('title','POST')


@section('container')
    <h1 class="mb-4">POST</h1>

    @foreach ($posts as $post)
        <article class="mb-3">
            <a href="/post/{{$post['slug']}}">
                <h1>{{$post['title']}}</h1>
            </a>
            <p>{{$post['body']}}</p>
        </article>
    @endforeach
@endsection
