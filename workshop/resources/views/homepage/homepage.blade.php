@extends('layouts.app')

@section('content')

    <h1 class="text-danger text-center">Gotta catch 'em all</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <h5> Click to start catching pokemans</h5>
                <a href="{{route('catch')}}"> <img src="https://media.giphy.com/media/bkxLFDUMB5RLy/giphy.gif"  width="300em" height="300em"></a>
            </div>
            <div class="col">
                <h5> Click here to see your inventory </h5>
                <a href="{{ route('inventory') }}"> <img src="https://i.kym-cdn.com/photos/images/newsfeed/001/111/093/46f.gif"  width="300em" height="300em"></a>
            </div>
        </div>
@endsection
