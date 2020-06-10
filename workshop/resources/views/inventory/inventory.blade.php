@extends('layouts.app')
@section('content')

    @foreach($pokemons as $pokemon)
        <div>
            <p>{{$pokemon->name}}</p>
            <img src="{{ $pokemon->sprite }}" alt="">
        </div>

    @endforeach

@endsection

