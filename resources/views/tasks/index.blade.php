@extends('layouts.main')

@section('content')
    <h1 class="text-lg">Task List</h1>
    <a href="{{ route('tasks.create') }}">Add new Task</a>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Due date</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
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

    {{ $tasks->links() }}
@endsection
