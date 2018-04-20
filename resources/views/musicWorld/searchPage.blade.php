@extends('layouts.master');

@section('content')
   <div class="container">
    <div class="listHotSong">
            <ul class="list-group">
            @foreach($dataInTrack as $dit)
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-left">
                            <h4 class="text-center">{{$loop->iteration}}</h4>
                        </div>
                        <div class="media-body">
                            <div>
                                <p class="media-heading"><a href="/musicworld/listen/{{$dit->name}}-{{$dit->id}}.mp3">{{$dit->name}}</a></p>
                                <p>{{$dit->album}}</p>
                            </div>
                            <div>
                                <p>price : {{$dit->price}}</p>
                                <a href="download/{{$dit->name}}-{{$dit->id}}"> <span><i class="fas fa-download"></i></span></a>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
            </ul>
        </div>
   </div>
@endsection