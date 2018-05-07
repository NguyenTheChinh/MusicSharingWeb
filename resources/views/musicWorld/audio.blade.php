@extends('layouts.master');

@section('styles')
    <script src="/js/audio.js"></script>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src= "/js/addTrack.js"></script>
<script>
    function notificationSuccessfully() {
        alert("Successfully!");
    }
</script>

@section('content')
<div class="container-audio">
    <audio controls="controls" autoplay id = "audioArea">
        <source src="/upload/{{$nameSong}}-{{$idSong}}" type="audio/ogg">
        <source src="/upload/{{$nameSong}}-{{$idSong}}" type="audio/mpeg">
        Your browser dose not Support the audio Tag
    </audio>
</div>
<div class="container-audio">
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
    <div class="colum1">
        <div class="row"></div>
    </div>
</div>
<div class="container">
<h3>The releated song</h3>
<div class="listHotSong">
    <ul class="list-group">
    @foreach($releatedSong as $rls)
        <li class="list-group-item">
            <div class="media">
                <div class="media-left">
                    <h4 class="text-center">{{$loop->iteration}}</h4>
                </div>
                <div class="media-body">
                    <div>
                        <p class="media-heading"><a href="/musicworld/listen/{{$rls->name}}-{{$rls->id}}">{{$rls->name}}</a></p>
                        <p>Album: {{$rls->album}}, Lượt nghe : {{$rls->listen}}</p>
                    </div>
                    <div>
                        <p>price : {{$rls->price}}</p>
                        <a href=""> <span><i class="fas fa-download"></i></span></a>
                        <a href="" title="add to your playlist" data-toggle="modal" data-target="#modal" onclick="addTrackToPl({{$rls->id}})"> <span><i class="fas fa-plus"></i></span></a>
                    </div>
                </div>
            </div>
        </li>
    @endforeach
    </ul>
    </div>

        <div id="modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Your Playlist</h4>
                </div>
            <div class="modal-body">
                @foreach($playlist as $pl)
                    <li class="list-group-item">
                        <div class="media">
                            <div class="media-left">
                                <h4 class="text-center">{{$loop->iteration}}</h4>
                            </div>
                            <div class="media-body">
                                <div>
                                    <form action = "/insert" method = "POST" style="display : flex">
                                        <div>
                                            <p class="media-heading">{{$pl->name}}</p>
                                            <p>Date : {{$pl->updated_at}}</p>
                                            <input type = "hidden" name = "track_id" class = "trackid">
                                            <input type = "hidden" name = "playlist_id" value = {{$pl->id}}>
                                        </div>
                                        <div style="margin-left: 250px; margin-top:15px">
                                            <button type = "submit" class="btn btn-primary" onclick="notificationSuccessfully()">Add</button>
                                        </div>
                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
</div>


</div>

@endsection