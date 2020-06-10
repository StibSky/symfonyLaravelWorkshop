@extends('layouts.app')
@section('content')
    <div style="display: flex">

    @foreach($pokemons as $pokemon)
        <div>
            <p>{{ ucfirst($pokemon->name) }}</p>
            <p>Level: {{ $pokemon->level }}</p>
            <img src="{{ $pokemon->sprite }}" alt="">
        </div>

    @endforeach
    </div>

@endsection

