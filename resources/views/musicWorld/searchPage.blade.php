@extends('layouts.master')

@section('content')
    <div class="container">
        <h3 class="text-center"> YOUR SEARCH</h3>
        <div class="row" style="margin-bottom : 60px">
            <div class="col-md-8 col-md-push-4">
            <form class="form-inline" action="/action_page.php">
                <div class="form-group">
                <input type="email" class="form-control" id="email">
                </div>
                <a href="#"><button class="btn btn-default">Search</button></a> 
            </form>
            </div>
        </div>  
        <div class="row">
            <div class="col-md-4">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">Track</a></li>
                <li><a href="#">Artist</a></li>
                <li><a href="#">Playlist</a></li>
            </ul>
            </div>
            <div class="col-md-8">
                keest qua hien thi ow day
            </div>
        </div>
    </div>
@endsection