@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('content')
    <form action="{{ isset($task) ? route('tasks.update', $task->id) : route('tasks.store') }}" method="POST">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="mb-4">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" @class(['border-red-500' => $errors->has('title')])
                value="{{ $task->title ?? old('title') }}">
            @error('title')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description">Description</label>
            <textarea type="text" name="description" @class(['border-red-500' => $errors->has('description')]) id="description" rows="5">{{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="long_description">Long Description</label>
            <textarea type="text" name="long_description" @class(['border-red-500' => $errors->has('long_description')]) id="long_description" rows="10">{{ $task->long_description ?? old('old_description') }}</textarea>
            @error('long_description')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex gap-2 items-center">
            <button class="btn" type="submit">
                @isset($task)
                    Updated Task
                @else
                    Add Task
                @endisset
            </button>
            <a class="link" href="{{ route('tasks.index') }}">Cancel</a>
        </div>
    </form>
@endsection
