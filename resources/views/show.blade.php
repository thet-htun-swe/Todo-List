@extends('layouts.app')

@section('content')
  <a href="/" class="btn btn-secondary">Go back</a>
  <h1>{{ $todos->title }}</h1>
  <div class="badge bg-warning text-dark">{{ $todos->due }}</div>
  <hr>
  <p>{{ $todos->content }}</p>

  <form action="/todo/{{ $todos->id }}" method="post">
    @csrf 
    @method('DELETE')
    <button type="submit" class="btn btn-danger float-end">Delete</button>
  </form>

  <a href="/todo/{{ $todos->id }}/edit" class="btn btn-primary">Edit</a>
@endsection