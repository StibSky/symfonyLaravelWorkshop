@extends('layouts.app')
@section('content')
    <div style="display: flex" class="justify-content-center">

        @foreach($pokemons as $pokemon)
            <div class="text-center d-flex flex-column justify-items-center">
                <p>{{ ucfirst($pokemon->name) }}</p>
                <p>Level: {{ $pokemon->level }}</p>
                <img src="{{ $pokemon->sprite }}" alt="">
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $pokemons->links() }}
    </div>
@endsection

