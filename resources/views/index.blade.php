@extends('layouts.app')

@section('content')  
  <h1>Todos List</h1>

  @if(count($todos)>0)
    @foreach($todos as $todo)
      <div class="card mb-2">
        <h2><a href="todo/{{ $todo->id }}">{{ $todo->title }}</a></h2>
        <span class="badge bg-warning text-dark">{{ $todo->due }}</span>
      </div>
    @endforeach
  @endif
@endsection