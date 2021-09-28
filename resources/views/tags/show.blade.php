@extends('layouts.main')

@section('content')
    <h1>Tag : <span>{{ $tag->name }}</span></h1>
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Due date</th>
            <th>Created at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tag->tasks as $task)
            <tr>
                <td>
                    <a href="{{ route('tasks.show',['task'=> $task->id]) }}">{{ $task->title}}</a>
                </td>
                <td>
                    {{ $task->due_date->isoFormat('ll') }}
                </td>
                <td>
                    {{ $task->created_at->isoFormat('ll') }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
