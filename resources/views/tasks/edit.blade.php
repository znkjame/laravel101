@extends('layouts.main')

@section('content')
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update',['task' => $task->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Task Title</label>
            <input type="text" name="title" autocomplete="off" placeholder="Task Title" value="{{  old('title',$task->title)  }}">
            @error('title')
            <p>
                {{ $message }}
            </p>
            @enderror
        </div>
        <div>
            <label for="detail">Task detail</label>
            <input type="text" name="detail" autocomplete="off" placeholder="Task Detail" value="{{ old('detail',$task->detail) }}">
            @error('detail')
            <p>
                {{ $message }}
            </p>
            @enderror
        </div>
        <div>
            <label for="due_date">Task Due Date</label>
            <input type="date" name="due_date" value="{{ old('due_date',$task->due_date->toDateString()) }}">
            @error('due_date')
            <p>
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="tags">Task Tags (seperated with comma)</label>
            <input type="text" name="tags" autocomplete="off" class="border p-2 w-full" value="{{ old('tags',$task->tag_names) }}">
            @error('tags')
            <p>
                {{ $message }}
            </p>
            @enderror
        </div>
        <div>
            <button>Edit Task</button>
        </div>
    </form>

    <hr>
    <h2>Delete Task</h2>
    <p>การลบข้อมูลนี้ ไม่สามารถเรียกกลับได้</p>
    <form action="{{ route('tasks.destroy',['task' => $task->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <div>
            <button type="submit">Delete Task</button>
        </div>
    </form>
@endsection
