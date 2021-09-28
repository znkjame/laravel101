@extends('layouts.main')

@section('content')
    <h1>Add new Task</h1>

    <form action="{{ route('tasks.store') }} " method="POST">
        @csrf
        <div>
            <label for="title">Task Title</label>
            <input type="text" name="title" autocomplete="off" placeholder="Task Title" value="{{ old('title') }}">
            @error('title')
            <p>
                {{ $message }}
            </p>
            @enderror
        </div>
        <div>
            <label for="detail">Task detail</label>
            <input type="text" name="detail" autocomplete="off" placeholder="Task Detail" size="50" value="{{ old('detail') }}">
            @error('detail')
            <p>
                {{ $message }}
            </p>
            @enderror
        </div>
        <div>
            <label for="due_date">Task Due Date</label>
            <input type="date" name="due_date" value="{{ old('due_date') }}">
            @error('due_date')
            <p>
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="tags">Task Tags (seperated with comma)</label>
            <input type="text" name="tags" autocomplete="off" class="border p-2 w-full" value="{{ old('tags') }}">
            @error('tags')
            <p>
                {{ $message }}
            </p>
            @enderror
        </div>

        <div>
            <button>Add new Task</button>
        </div>
    </form>
@endsection
