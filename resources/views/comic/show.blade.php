@extends('layouts/app')

@section('content')
<div class="container py-5">
    <h1>{{$comic->title}}</h1>
    <img src="{{$comic->thumb}}" alt="">
    <p class="mt-5"> {{$comic->description}}</p>
    <p>Price: {{$comic->price}}</p>
    <p>Series: {{$comic->series}}</p>
    <p>Sale Date: {{$comic->sale_date}}</p>
    <p>Type: {{$comic->type}}</p>
    <p>Artists: {{$comic->artists}}</p>
    <p>Writers: {{$comic->writers}}</p>

    <div>
        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">Edit</a>

        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
        </form>
    </div>


</div>



@endsection