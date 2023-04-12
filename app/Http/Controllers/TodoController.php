<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('createtodo');
    }

    public function viewtodo()
    {
        $todos = Todo::all();

        return view('tasks', ['todos' => $todos]);
    }
    public function addtodo()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'nullable'
        ]);

        Todo::create($attributes);

        return redirect('/todos');
    }

    public function complete(Todo $todo)
    {
        $todo->update(['isDone' => true]);
        return redirect('/todos');
    }



    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect('/todos');
    }
}
