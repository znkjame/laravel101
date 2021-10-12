@extends('layouts.main')

@section('content')
    <h1 class="text-lg">Apartment List {{ __('messages.apartments.lists') }}</h1>

    @can('create',\App\Models\Apartment::class)
    <a href="{{ route('apartments.create') }}">Add New Apartment</a>

    @endcan
   <table class="table border-gray-200">
        <thead>
            <tr>
                <th>Name</th>
                <th>Floors</th>
                <th>Rooms</th>
                <th>Created At</th>
            </tr>
        </thead>
       <tbody>
            @foreach($apartments as $apartment)
                <tr>
                    <td>
                        <a href="{{ route('apartments.show',['apartment' => $apartment->id]) }}">
                        {{ $apartment->name }}
                        </a>
                    </td>
                    <td>
                        {{ $apartment->floors }}
                    </td>
                    <td>
                        {{ $apartment->rooms->count() }}
                    </td>
                    <td title="{{ $apartment->created_at }}">
                        {{ $apartment->created_at->diffForHumans() }}
                    </td>
                </tr>
            @endforeach
       </tbody>
   </table>
@endsection
