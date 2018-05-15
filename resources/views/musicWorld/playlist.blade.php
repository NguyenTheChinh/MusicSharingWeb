@extends('layouts.master')
@section('title')
    Your Playlist
@endsection

@section('content')
    <div class="container">
    <h3 class="text-center">YOUR PLAYLIST</h3>
            <div class="listHotSong">
                <ul class="list-group">
                @foreach($playlist as $pl)
                    <li class="list-group-item">
                        <div class="media">
                            <div class="media-left">
                                <h4 class="text-center">{{$loop->iteration}}</h4>
                            </div>
                            <div class="media-body">
                                <div>
                                    <p class="media-heading"><a href="/getTrackInList-{{$pl->id}}">{{$pl->name}}</a></p>
                                    <p>Date : {{$pl->updated_at}}</p>
                                </div>
                                <div>

                                    <a href="deletePlaylist-{{$pl->id}}"> <span><i class="fas fa-trash-alt" onclick="notificationSuccessfully()"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
                </ul>
            </div>
            <script>
                function notificationSuccessfully(){
                    alert("Successfully!");
                }
            </script>
    </div>
    </div>
    </div>

@endsection