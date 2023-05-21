
@extends('tamplates.main')

@section('container')

<h2 class="mb-5">Post Categories</h2>

@foreach($categories as $category)
<ul>
    <li>
        <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
    </li>
</ul>
@endforeach
@endsection 

