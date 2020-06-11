@extends('layouts.app')

@section('content')

    <h1 class="text-danger text-center">Gotta catch 'em all</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <h5> Click to start catching pokemans</h5>
                <a href="{{route('catch')}}"> <img src="https://cdn.mos.cms.futurecdn.net/xW6ZLDNPzK6GYHLRKeVtvJ.jpg"  width="300em" height="300em"></a>
            </div>
            <div class="col">
                <h5> Click here to see your inventory </h5>
                <a href="{{ route('inventory') }}"> <img src="https://toucantoco.com/blog/wp-content/uploads/2016/07/Capture-d%E2%80%99e%CC%81cran-2016-07-19-a%CC%80-15.27.31.png"  width="300em" height="300em"></a>
            </div>
        </div>
@endsection
