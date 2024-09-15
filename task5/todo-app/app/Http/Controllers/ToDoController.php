<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    // Display all To-Dos
    public function index()
    {
        $todos = ToDo::all();
        return view('todos.index', compact('todos'));
    }

    // Show form to create a new To-Do
    public function create()
    {
        return view('todos.create');
    }

    // Store a new To-Do
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        ToDo::create($request->all());

        return redirect()->route('todos.index')->with('success', 'To-Do created successfully.');
    }

    // Show form to edit an existing To-Do
    public function edit($id)
    {
        $todo = ToDo::findOrFail($id);
        return view('todos.edit', compact('todo'));
    }

    // Update an existing To-Do
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $todo = ToDo::findOrFail($id);
        $todo->update($request->all());

        return redirect()->route('todos.index')->with('success', 'To-Do updated successfully.');
    }

    // Delete a To-Do
    public function destroy($id)
    {
        $todo = ToDo::findOrFail($id);
        $todo->delete();

        return redirect()->route('todos.index')->with('success', 'To-Do deleted successfully.');
    }
}
