@extends('layouts.app')
@section('content')
    <div class="text-center">
        <form action="{{ route('catchOrNot') }}" method="POST">
            @csrf
            <img src="{{ $pokemon->sprites->front_default }}" alt="">
            <p> {{  ucfirst($pokemon->name) }}</p>
            <p>Level: {{ $level }}</p>
            <button class=" btn btn-success" name="catch">Catch</button>
            <button name="run" class="btn btn-danger">Run Away!</button>

            <input type="text" hidden name="pokeId" value="{{  ucfirst($pokemon->id) }}">
            <input type="text" hidden name="level" value="{{  $level }}">
        </form>
        <P>You have {{ $pokeballs }} pokeballs remaining</P>
        <br><br><br>
        <form action="{{ route ('catch') }}" method="GET">
            <button class=" btn btn-info"  name="gen1">gen1</button>
            @if(Auth::user()->unlockgen > 1)
            <button class=" btn btn-info" name="gen2">gen2</button>
            @endif
            @if(Auth::user()->unlockgen > 2)
                <button class=" btn btn-info" name="gen3">gen3</button>
            @endif
        </form>

    </div>
@endsection
