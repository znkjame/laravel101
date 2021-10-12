@extends('layouts.main')

@section('content')
    <h1>All Images</h1>

    <div>
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Path</th>
                <th>Preview</th>
            </tr>
            </thead>
            <tbody>
            @foreach($images as $image)
                <tr>
                    <td>
                        {{ $image->name }}
                    </td>
                    <td>
                        {{ $image->path }}
                    </td>
                    <td>
                        <img src="{{ \Storage::get($image->path) }}" alt="">
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
