@extends('layouts.master');
@section('title')
    Trap rating song
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src= "/js/addTrack.js"></script>

    @section('content')
    <div class="container">
        <h3 class="text-center">THE RATING SONG</h3>
        <div class="listHotSong">
            <ul class="list-group">
            @foreach($ratingSong as $rts)
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-left">
                            <h4 class="text-center">{{$loop->iteration}}</h4>
                        </div>
                        <div class="media-body">
                            <div>
                                <p class="media-heading"><a href="/musicworld/listen/{{$rts->name}}-{{$rts->id}}.mp3">{{$rts->name}}</a></p>
                                <p>Album : {{$rts->album}}, Lượt nghe : {{$rts->listen}}, id :{{$rts->id}}</p>
                            </div>
                            <div>
                                <p>price : {{$rts->price}}</p>
                                <a href="/download/{{$rts->name}}-{{$rts->id}}"> <span><i class="fas fa-download"></i></span></a>
                                <a href="" title="add to your playlist" data-toggle="modal" data-target="#modal" onclick="addTrackToPl({{$rts->id}})"> <span><i class="fas fa-plus"></i></span></a>
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
                                    <form action = "/insert" method = "POST"style="display : flex" >
                                        <div>
                                            <p class="media-heading">{{$pl->name}}</p>
                                            <p>Date : {{$pl->updated_at}}</p>
                                            <input type = "hidden" name = "track_id" class = "trackid">
                                            <input type = "hidden" name = "playlist_id" value = {{$pl->id}}>
                                        </div>
                                        <div style="margin-left: 250px; margin-top:15px">
                                            <button type = "submit" class="btn btn-primary" onclick="notificationSuccessfull()">Add</button>
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

    <script>
        function notificationSuccessfull() {
            alert("Successfully!");
        }
    </script>
</div>

</div>







    </div>
    @endsection

    @section('scripts')
    <script src="{{ asset('js/googleMap.js') }}"></script>
    @endsection
