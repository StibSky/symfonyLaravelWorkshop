@extends('layouts.app')
@section('content')

    <div style="display: flex" class="justify-content-center">


        @foreach($pokemons as $pokemon)
            <div class="text-center d-flex flex-column justify-items-center">
                <p>{{ ucfirst($pokemon->name) }}</p>
                <p>Level: {{ $pokemon->level }}</p>
                <img src="{{ $pokemon->sprite }}" style="width: 125px; height: auto" alt="">
                <p>Sell for: {{round($pokemon->level *(5+($pokemon->level/10)))}}$</p>
                <p>Level for: {{round(($pokemon->level * 2)*0.75)}}$</p>
                <form action="{{ route('sell', $pokemon) }}" method="post">
                    @csrf
                    <button value="{{ $pokemon->id }}" name="sell">Sell this pokémon</button>
                </form>
                <form action="{{ route('level', $pokemon) }}" method="post">
                    @csrf
                    <button value="{{$pokemon->id}}" name="level">Level this pokemon</button>
                    <br>
                </form>
                <form action="{{ route('shiny', $pokemon) }}" method="post">
                    @csrf
                    @if($pokemon->level == 100)
                        <button value="{{$pokemon->id}}" name="shiny"> unlock shiny</button>
                    @endif
                </form>


            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $pokemons->links() }}
    </div>
@endsection

