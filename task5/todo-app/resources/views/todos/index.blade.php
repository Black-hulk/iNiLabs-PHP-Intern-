@extends('layouts.app')

@section('content')
    <h1>To-Do List</h1>
    <a href="{{ route('todos.create') }}">Create New To-Do</a>
    <ul>
        @foreach($todos as $todo)
            <li>
                <strong>{{ $todo->title }}</strong>
                <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>
                <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
