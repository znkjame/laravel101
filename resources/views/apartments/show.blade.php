@extends('layouts.main')

@section('content')
    <h1>
        Apartment
        <span class="text-lg">{{ $apartment->name }}</span>
    </h1>

    <p>
        จำนวนชั้น {{ $apartment->floors }} ชั้น
    </p>

    @if($apartment->officer)
    <p>
        Officer : {{ $apartment->officer->name }}
    </p>
    @endif

    <hr>
    @can('update',$apartment)
    <a href="{{ route('apartments.edit',['apartment' => $apartment->id]) }}">
        Edit this apartment
    </a>
    @endcan

    @can('update',$apartment)
    <div class="mt-4">
        Rooms in This Apartment
    </div>
    <div class="mt-2">
        <a href="{{ route('apartments.rooms.create',['apartment'=>$apartment->id]) }}"
           class="bg-blue-400 hover:bg-blue-200 px-4 py-2">
            More Room
        </a>
    </div>
    @endcan
    <div>
        <ul>
            @foreach($apartment->rooms->sortBy('floor') as $room)
                <li>
                    <a class="text-blue-600 hover:text-green-600"
                        href="{{ route('rooms.show',['room'=>$room->id]) }}">show</a>
                    {{ $room->type }} - {{ $room->name }}
                    floor {{ $room->floor }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
