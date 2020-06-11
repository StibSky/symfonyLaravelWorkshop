@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ route('buy') }}" method="POST" class="d-flex justify-content-around">
            @csrf
            <div class="d-flex flex-column align-items-center">
                <img src="https://seeklogo.com/images/P/pokeball-logo-DC23868CA1-seeklogo.com.png" style="width: 100px; height: auto" alt="">
                <p>Pokeball</p>
                <p>100$</p>
                <button name="pokeball" style="width: 100px">Buy pokéball</button>
                <button name="pokeball10" style="width: 100px">Buy 10 pokéballs</button>
            </div>
            <div class="d-flex flex-column align-items-center">
                <img src="https://i.pinimg.com/originals/7f/19/cf/7f19cfa2e7e5d580f4548204cd9552d5.png" style="width: 100px; height: auto" alt="" class="d-flex flex-column">
                <p>MewTwo</p>
                <p>10000$</p>
                <button name="mewtwo">Buy a shiny mewtwo</button>
            </div>
        </form>
    </div>
@endsection
