@extends('tamplates.main')
@section('title','POST')


@section('container')

<h1>{{$post['title']}}</h1>
<p>By : {{$post->user->name}} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

<p>{{$post['body']}}</p>

<a href="../">Kembali</a>
@endsection