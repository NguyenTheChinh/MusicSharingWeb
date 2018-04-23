@extends('layouts.master');

@section('content')
   <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-4 searchForm">
                <form class="form-inline" action="/search" method="post">    
                    <input type="text" placeholder="search song, artist, playlist......" name="search" class="form-control">
                    <a href="#"><button class="btn btn-primary">Search</button></a> 
                </form>
            </div>
        </div>

        <h3>YOUR RESULT SEARCH </h3>
        <div class="listHotSong">
            @if(Session::has('result'))
            <ul class="list-group">
            @foreach(Session::get('result')[0] as $track)
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-left">
                            <h4 class="text-center">{{$loop->iteration}}</h4>
                        </div>
                        <div class="media-body">
                            <div>
                                <p class="media-heading"><a href="/musicworld/listen/{{$track->name}}-{{$track->id}}.mp3">{{$track->name}}</a></p>
                                <p>Album : {{$track->album}}, Lượt nghe : {{$track->listen}}</p>
                            </div>
                            <div>
                                <p>price : {{$track->price}}</p>
                                <a href="/download/{{$track->name}}-{{$track->id}}"> <span><i class="fas fa-download"></i></span></a>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
            @foreach(Session::get('result')[1] as $artist)
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-left">
                            <h4 class="text-center">{{$loop->iteration}}</h4>
                        </div>
                        <div class="media-body">
                            <div>
                                <p class="media-heading"><a href="/musicworld/listen/{{$artist->name}}-{{$artist->id}}.mp3">{{$artist->name}}</a></p>
                                <p>Album : {{$artist->album}}, Lượt nghe : {{$artist->listen}}</p>
                            </div>
                            <div>
                                <p>price : {{$artist->price}}</p>
                                <a href="/download/{{$artist->name}}-{{$artist->id}}"> <span><i class="fas fa-download"></i></span></a>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
            </ul>
            @endif
        </div>
   </div>
@endsection