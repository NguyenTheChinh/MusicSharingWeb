@extends('layouts.master')
@section('title')
    Music World
@endsection

@section('content')
<div id="carouselMusicSharing" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#carouselMusicSharing" data-slide-to="0" class="active"></li>
        <li data-target="#carouselMusicSharing" data-slide-to="1"></li>
        <li data-target="#carouselMusicSharing" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="./image/maxresdefault.jpg" alt="New York" width="1200" height="700">
            <div class="carousel-caption">
            <h3>Rappper</h3>
            <p>I create the trend underground music</p>
            </div>      
        </div>

        <div class="item">
            <img src="./image/toliver.jpg" alt="Toliver" width="1200" height="700">
            <div class="carousel-caption">
            <h3>Touliver</h3>
            <p>Touliver said : "Tôi yêu music world" </p>
            </div>      
        </div>
        
        <div class="item">
            <img src="./image/SơnTung.jpg" alt="Los Angeles" width="1200" height="700">
            <div class="carousel-caption">
            <h3>Sơn Tùng MTP</h3>
            <p>Nếu không có Music world thì tôi đã không nổi được như ngày hôm nay</p>
            </div>      
        </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#carouselMusicSharing" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselMusicSharing" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Container (The Band Section) -->
    <div id="band" class="container text-center">
    <h3>THE RATING SONG</h3>
    <p><em>We love music!</em></p>
    <div class="row">
        <div class="col-sm-4">
            <p class="text-center"><strong>Dance & EDM</strong></p><br>
            <a href="/musicworld/ratingDanceEDM">
                <img src="./image/image_teams/Tien_team.jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
            </a>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>House</strong></p><br>
            <a href="/musicworld/ratingHouse">
                <img src="./image/image_teams/Tien_team.jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
            </a>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>Dubstep</strong></p><br>
            <a href="/musicworld/ratingDubstep">
                <img src="./image/image_teams/Tien_team.jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <p class="text-center"><strong>Trap</strong></p><br>
            <a href="/musicworld/ratingTrap">
                <img src="./image/image_teams/Tien_team.jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
            </a>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>Drum & Bass</strong></p><br>
            <a href="/musicworld/ratingDrumBass">
                <img src="./image/image_teams/Tien_team.jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
            </a>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>Trance</strong></p><br>
            <a href="/musicworld/ratingTrance">
                <img src="./image/image_teams/Tien_team.jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
            </a>
        </div>
    </div>
    </div>

<!-- Container (theHotSong Section) -->
    <div id="theHotSong" class="bg-1">
        <div class="container">
            <h3 class="text-center">THE HOT SONG</h3>
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
                                    <p class="media-heading"><a href="/musicworld/listen/{{$dit->name}}-{{$dit->id}}">{{$dit->name}}</a></p>
                                    <p>{{$dit->album}}</p>
                                </div>
                                <div>
                                    <p>price : {{$dit->price}}</p>
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

<!-- Container (Contact Section) -->
    <div id="contact" class="container">
    <h3 class="text-center">Contact</h3>
    <p class="text-center"><em>We love our fans!</em></p>

    <div class="row">
        <div class="col-md-4">
        <p><span class="glyphicon glyphicon-map-marker"></span>Ngõ 71, đường Hoàng Mai, thành phố Hà Nội</p>
        <p><span class="glyphicon glyphicon-phone"></span>Hotline: 012 5555 9172</p>
        <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
        </div>
        <div class="col-md-8">
        <div class="row">
            <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
        <br>
        <div class="row">
            <div class="col-md-12 form-group">
            <button class="btn pull-right" type="submit">Send</button>
            </div>
        </div>
        </div>
    </div>
  <br>
  </div>
</div>



<!-- Modal -->
<div id="myModalCreatePlaylist" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Create Your Playlist</h4>
      </div>
      <div class="modal-body">
        <input type="text" placeholder="Enter new playlist" size="50">
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal">create</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection