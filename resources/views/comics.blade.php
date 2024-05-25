@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row gy-3">
        @foreach($comics as $comic)
        <div class="col-4">
            <div class="card h-100" style="width: 18rem;">
                <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$comic['title']}}</h5>
                    <p class="card-text">{{$comic['series']}}</p>
                    <p class="card-text">{{$comic['description']}}</p>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>

@endsection