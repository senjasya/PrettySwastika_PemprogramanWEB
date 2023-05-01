@extends('tamplates.main')
@section('title','POST')


@section('container')

<h1>{{$post['title']}}</h1>

<p>{{$post['body']}}</p>
@endsection