<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('created_at', 'desc')->get();
        return view('index', compact('todos'));
    }

    public function show($id)
    {
        $todos = Todo::find($id);
        return view('show', compact('todos'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required',
                'content' => 'required',
                'due' => 'required'
            ]
        );

        $todo = new Todo;
        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->due = $request->input('due');
        $todo->save();

        return redirect('/')->with('success', 'Todos created successfully!');
    }

    public function edit($id)
    {
        $todos = Todo::find($id); 
        return view('edit', compact('todos'));
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);

        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->due = $request->input('due');
        $todo->save();

        return TodosController::show($id)->with('success', 'Todos edited successfully!');
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect('/')->with('success', 'Todo deleted successfully!');
    }

}
