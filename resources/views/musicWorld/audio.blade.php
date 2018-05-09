@extends('layouts.master');

@section('content')

    <audio controls autoplay loop>
        <source src="/upload/{{$nameSong}}-{{$idSong}}" type="audio/ogg">
        Your browser dose not Support the audio Tag
    </audio>
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

<div class="container"> 
<h3>COMMENT </h3>

<div class="col-md-8 col-md-push-4 searchForm">
    <p> {{ Auth::user()->username }} </p>

<form class="form-inline" action="/musicworld/listen/{{nameSong}}-{{idSong}}" method="post">
    <input type="text" placeholder="Share your thought..." name="comment" class="form-control">
    <input type="hidden" name="idSong" value='{{$idSong}}'> </form>

 <a href="/musicworld/listen/{{nameSong}}-{{idSong}}"> 

    <button class="btn btn-primary">
    Comment
    </button>
</a>

</div>
</div>

<div class="container">
<h3>Comments</h3>
<div class="listHotSong">
    <ul class="list-group">
    @foreach($comments as $comment)
        <li class="list-group-item">
            <div class="media">
                <div class="media-left">
                    <h4 class="text-center"></h4>
                </div>
                <div class="media-body">
                    <div>
                        <p class="media-heading"></p>
                        <p>{{$comment->content}}</p>

                    </div>
                    <div>
                        <a href=""> <span><i class="fas fa-download"></i></span></a>
                    </div>
                </div>
            </div>
        </li>
    @endforeach
    </ul>
    </div>
</div>


</div>




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
                    </div>
                </div>
            </div>
        </li>
    @endforeach
    </ul>
    </div>
</div>

@endsection