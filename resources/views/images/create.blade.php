@extends('layouts.main')

@section('content')
    <h1>Upload Image</h1>
    <form action="{{ route('images.store') }}">
        @csrf

        <input type="file">
        <button></button>
    </form>
