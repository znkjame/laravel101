@extends('layouts.main')

@section('content')
    <h1 class="text-lg">Edit Apartment</h1>

    <form action="{{ route('apartments.update',['apartment'=> $apartment->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Apartment Name</label>
            <input type="text" name="name"
                   class="border-2 p-2 @error('name') border-red 400 @enderror"
                   autocomplete="off"
                   placeholder="Apartment Name"
                   value="{{ old('name',$apartment->name) }}">
            @error('name')
                <p>
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div>
            <label for="floors">Floors</label>
            <input type="number" min="1" name="floors"
                   class="border-2 p-2 @error('name') border-red 400 @enderror"
                    value="{{ old('floors',$apartment->floors) }}">
            @error('floors')
            <p>
                {{ $message }}
            </p>
            @enderror
        </div>
        <div>
            <button type="submit" class="bg">Edit Apartment</button>
        </div>
    </form>
    <hr>
    <div>
        <h1>Danger Zone</h1>
        <h2> Delete this apartment </h2>
        <p class="text-red-800">การลบข้อมูลนี้ ไม่สามารถเรียกกลับได้</p>
        <form action="{{ route('apartments.destroy',['apartment' => $apartment->id] ) }}" method="POST">
            @Method('DELETE')
            @csrf
            <label for="destroy">ใส่ชื่ออพาร์ตเมนต์ เพื่อยืนยันว่าจะลบ</label>
            <input type="text">
            <button type="submits">Delete</button>
        </form>
    </div>
@endsection
