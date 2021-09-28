@extends('layouts.main')
@section('content')
    <h1 class="text-5xl">
        Add more room to apartment {{ $apartment->name }}
    </h1>

    <form action="{{ route('rooms.store') }}" method="POST">
        @csrf

        <input type="hidden" name="apartment_id" value="{{$apartment->id}}">
        <div>
            <label for="floor">Floor</label>
            <input type="number" min="1" max="{{ $apartment->floors }}" name="floor" class="border-2" value="{{ old('floor') }}">
            /{{ $apartment->floors }}
            @error('floor')
            <p>
                {{ $message }}
            </p>
            @enderror
        </div>

        <div>
            <label for="name">Room Number</label>
            <input type="text"  name="name" class="border-2" value="{{ old('name') }}">
            @error('name')
            <p>
                {{ $message }}
            </p>
            @enderror
        </div>

        <div>
            <label for="type">Room type</label>
            <select name="type" id="type" class="border-2 @error('name') border-red-400 @enderror">
                @foreach($room_types as $type)
                    <option value="{{ $type }}" {{ old('type')?"selected":"" }}> {{ $type }}</option>
                @endforeach
{{--                <option value="SUITE">SUITE</option>--}}
{{--                <option value="STUDIO">STUDIO</option>--}}
{{--                <option value="LOFT">LOFT</option>--}}
{{--                <option value="PENTHOUSE">PENTHOUSE</option>--}}
            </select>
            @error('type')
            <p>
                {{ $message }}
            </p>
            @enderror
        </div>
        <button type="submit" class="bg">Add Room</button>
    </form>
@endsection
