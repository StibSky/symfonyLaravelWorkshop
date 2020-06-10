@extends('layouts.app')
@section('content')
    <div class="text-center">
        <form action="{{ route('catchOrNot') }}" method="POST">
            @csrf
            <img src="{{ $pokemon->sprites->front_default }}" alt="">
            <p> {{  ucfirst($pokemon->name) }}</p>
            <p>Level: {{ $level }}</p>
            <button>Catch</button>
            <button>Run Away!</button>

            <input type="text" hidden name="pokeId" value="{{  ucfirst($pokemon->id) }}">
            <input type="text" hidden name="level" value="{{  $level }}">
        </form>
    </div>
@endsection
