@extends('layouts/app')

@section('content')

<h1 class="text-center my-5">DC COMICS</h1>

<div class="container">

    @foreach ($comics as $comic)

    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between">{{$comic->title}} <a href="{{route('comics.show', $comic->id)}}">select</a></li>
    </ul>

    @endforeach

    <a href="{{route('comics.create')}}" class="btn btn-primary mt-5">Add new comic</a>

</div>


@endsection