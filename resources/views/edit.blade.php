@extends('layouts.app')

@section('content')
  <h1>Edit Todos</h1>

  <form action="/todo/{{ $todos->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group mb-2">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" value="{{ $todos->title }}">
    </div>
    <div class="form-group mb-2">
      <label for="title">Content</label>
      <input type="text" name="content" id="content" class="form-control" placeholder="Enter Content" value="{{ $todos->content }}">
    </div>
    <div class="form-group mb-2">
      <label for="title">Due</label>
      <input type="text" name="due" id="due" class="form-control" placeholder="Enter Due" value="{{ $todos->due }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
