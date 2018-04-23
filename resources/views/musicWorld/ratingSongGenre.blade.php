@extends('layouts.master');
@section('title')
    Trap rating song
@endsection
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
                            <p>Album : {{$rts->album}}, Lượt nghe : {{$rts->listen}}</p>
                        </div>
                        <div>
                            <p>price : {{$rts->price}}</p>
                            <a href="/download/{{$rts->name}}-{{$rts->id}}"> <span><i class="fas fa-download"></i></span></a>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
        </ul>
    </div>
    </div>
    @endsection

    @section('scripts')
    <script src="{{ asset('js/googleMap.js') }}"></script>
    @endsection
