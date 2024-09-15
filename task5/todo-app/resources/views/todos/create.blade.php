@extends('layouts.app')

@section('content')
    <h1>Create To-Do</h1>
    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit">Create</button>
    </form>
@endsection
