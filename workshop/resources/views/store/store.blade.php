@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ route('buy') }}" method="POST" class="d-flex justify-content-around">
            @csrf
            <div class="d-flex flex-column align-items-center">
                <img src="https://seeklogo.com/images/P/pokeball-logo-DC23868CA1-seeklogo.com.png" style="width: 100px; height: auto" alt="">
                <p>Pokeball</p>
                <p>100$</p>
                <button class=" btn btn-success" name="pokeball" style="width: 100px">Buy pokéball</button>
                <button class=" btn btn-success" name="pokeball10" style="width: 100px">Buy 10 pokéballs</button>
            </div>
            <div class="d-flex flex-column align-items-center">
                <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/172.png" style="width: 100px; height: auto" alt="" class="d-flex flex-column">
                <p>gen2</p>
                <p>2000$</p>
                <button class=" btn btn-success" name="gen2unlock">Unlock gen 2 catch</button>
            </div>
            <div class="d-flex flex-column align-items-center">
                <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/258.png" style="width: 100px; height: auto" alt="" class="d-flex flex-column">
                <p>gen3</p>
                <p>10 000$</p>
                <button class=" btn btn-success" name="gen3unlock">Unlock gen 3 catch</button>
            </div>
        </form>
    </div>
@endsection
