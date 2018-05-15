@extends('layouts.master')
@section('title')
    Song in playlist
@endsection

@section('content')
    <div class="container">
        <h3 class="text-center">PlayList</h3>
        <div class="listHotSong">
            <ul class="list-group">
            @foreach($listTrack as $tr)
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-left">
                            <h4 class="text-center">{{$loop->iteration}}</h4>
                        </div>
                        <div class="media-body">
                            <div>
                                <p class="media-heading"><a href="/musicworld/listen/{{$tr->track->name}}-{{$tr->track->id}}.mp3">{{$tr->track->name}}</a></p>
                                <p>Album : {{$tr->track->album}}, Lượt nghe : {{$tr->track->listen}}</p>
                            </div>
                            <div>
                                <p>price : {{$tr->track->price}}</p>
                                <a href="/download/{{$tr->track->name}}-{{$tr->track->id}}"> <span><i class="fas fa-download"></i></span></a>
                                <a href="/deleteTrackInPlaylist/{{$tr->track->id}}-{{$tr->playlist_id}}"> <span><i class="fas fa-trash-alt" onclick="notificationSuccessfully()"></i></span></a>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
            </ul>
        </div>
    </div>

@endsection