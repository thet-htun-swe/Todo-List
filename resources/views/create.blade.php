@extends('layouts.app')

@section('content')
  <h1>Create Todos List</h1>

  <form action="/todo" method="post">
    @csrf
    <div class="form-group mb-2">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" value="{{ old('title') }}">
    </div>
    <div class="form-group mb-2">
      <label for="title">Content</label>
      <input type="text" name="content" id="content" class="form-control" placeholder="Enter Content" value="{{ old('content') }}">
    </div>
    <div class="form-group mb-2">
      <label for="title">Due</label>
      <input type="text" name="due" id="due" class="form-control" placeholder="Enter Due" value="{{ old('due') }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection