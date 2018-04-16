@extends('layouts.master');
@section('title')
    Trap rating song
@endsection
    @section('content')
    <div class="container">
    <h3 class="text-center">THE Rating Song</h3>
    <div class="listHotSong">
        <ul class="list-group">
        @foreach($ratingSong as $rts)
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <h4 class="text-center">{{$rts->id}}</h4>
                    </div>
                    <div class="media-body">
                        <div>
                            <p class="media-heading"><a href="/musicworld/listen/{{$rts->name}}-{{$rts->id}}">{{$rts->name}}</a></p>
                            <p>{{$rts->album}}</p>
                        </div>
                        <div>
                            <p>price : {{$rts->price}}</p>
                            <a href=""> <span><i class="fas fa-download"></i></span></a>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
        </ul>
    </div>
    </div>
    @endsection
