@extends('layouts.main')

@section('content')
    <h1 class="text-lg">Tag List</h1>
    <table>
        <thead>
        <tr>
            <th>Tag name</th>
            <th>Number of tasks</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tags as $tag)
            <tr>
                <td>
                    <a href="{{ route('tags.slug',['slug'=> $tag->name]) }}">{{ $tag->name }}</a>
                </td>
                <td>
                    {{ $tag->tasks->count() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
