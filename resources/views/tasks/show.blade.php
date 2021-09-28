@extends('layouts.main')

@section('content')
    <h1>Task : <span>{{ $task->title }}</span></h1>
    <div class="mt-2">
        Tags:
    @foreach($task->tags as $tag)
            <span class="inline-block p-2 ml-4">
                <a href="{{ route('tags.slug',['slug' => $tag->name ]) }}">
                {{ $tag->name }}
                </a>
            </span>
        @endforeach
    </div>
    <h3>รายละเอียดของงาน</h3>
    <p>{{ $task->detail }}</p>

    <h3>กำหนดส่ง : <span>{{ $task->due_date->isoFormat('ll') }}</span></h3>
    <h3>วันที่สร้างาน : <span>{{ $task->created_at->isoFormat('ll') }}</span></h3>



    <div>
        <a href="{{  route('tasks.edit',['task'=> $task->id] )}}">Edit Task</a>
    </div>
@endsection
