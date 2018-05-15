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
<h3>Leave a comment </h3>

<div class="col-md-8 col-md-push-4 searchForm">
    <p> {{ Auth::user()->username }} </p>

<form class="form-inline" action='' method="POST">

{{ csrf_field() }}

    <input type="text" placeholder="Share your thought..." name="comment" class="form-control">
    <input type="hidden" name="idSong" value='{{$idSong}}'>

    <input type="submit" name="" value ="Comment"> 

    </form>
</a>


</div>
</div>

<div class="container">
<h4>Comments</h4>

   <div>
    @foreach ($data as $comments) 
     <li class="list-group-item">
            <div class="media">
                <div class="media-left">
                </div>
     <div class="media-body">
       
                         {{ $comments->username }} <br>
                         {{ $comments->content }} 
    
     </div>
 </div> </li>
                   
    @endforeach 
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