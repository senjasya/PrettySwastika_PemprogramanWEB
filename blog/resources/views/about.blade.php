@extends('tamplates.main')
@section('title',$title)


@section('container')
    <h1>{{ $name }}</h1>
    <h3>{{ $email }}</h3>
    <img class="img-fluid" width="200" src="img/{{$image}}" alt="">

@endsection