@extends('layouts.main')

@section('content')
    <h1 class="text-lg"> Add New Apartment</h1>

{{--    @if ($errors->any())--}}
{{--    <div class="bg-red-100 p8" >--}}
{{--        @foreach($errors->all() as $error)--}}
{{--            <p>--}}
{{--                {{ $error }}--}}
{{--            </p>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--    @endif--}}
    <form action="{{ route('apartments.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Apartment Name</label>
            <input type="text" name="name" autocomplete="off" placeholder="Apartment Name"
                   value="{{ old('name') }}"
                   class="border-2 @error('name') border-red-400 @enderror">
            @error('name')
                <div class="text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="floors">Floors</label>
            <input type="number" min="1" name="floors" value="{{ old('floors') }}"
                   class="border-2 @error('floors') border-red-400 @enderror">
            @error('floors')
            <div class="text-red-600">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <button type="submit" class="bg">Add new Apartment</button>
        </div>
    </form>
@endsection
