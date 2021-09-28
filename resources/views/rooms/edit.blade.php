@extends('layouts.main')
@section('content')
    <h1 class="text-5xl">
        Edit Room {{ $room->name }}
    </h1>
    <h1 class="text-3xl">
        Apartment {{ $room->apartment->name }}
    </h1>
    <form action="{{ route('rooms.update',['room' => $room->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="floor">Floor</label>
            <input type="number" min="1" max="{{ $room->floor }}" name="floor" class="border-2 @error('name') border-red-400 @enderror" value="{{ $room->floor }}">
            /{{ $room->apartment->floors }}
            @error('floor')
            <p>
                {{ $message }}
            </p>
            @enderror
        </div>

        <div>
            <label for="name">Room Number</label>
            <input type="text"  name="name" class="border-2 @error('name') border-red-400 @enderror" value="{{ $room->name }}">
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
                    <option @if($type === old('type',$room->type)) selected @endif
                        value="{{ $type }}">
                        {{ $type }}
                    </option>
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
        <button type="submit" class="bg">Edit Room</button>
    </form>
@endsection
