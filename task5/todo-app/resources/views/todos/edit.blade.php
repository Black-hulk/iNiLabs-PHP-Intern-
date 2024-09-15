@extends('layouts.app')

@section('content')
    <h1>Edit To-Do</h1>
    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $todo->title }}" required>
        <textarea name="description">{{ $todo->description }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection
