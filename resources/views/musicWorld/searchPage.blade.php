@extends('layouts.master')

@section('content')
    <div class="container">
        <h3 class="text-center"> YOUR SEARCH</h3>
        <div class="row" style="margin-bottom : 60px">
            <div class="col-md-8 col-md-push-4">
            <form class="form-inline" action="/search" method="post">
                <div class="form-group">
                <input type="text" class="form-control" name="search">
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
            <table class="table">
            <thead>
                <tr>
                    <th>Track</th>
                    <th>artist</th>
                </tr>
            </thead>
            <tbody>
                @if(Session::has('result'))
                <tr>
                    <@foreach(Session::get('result')[0] as $track)
                        <td>{{$track->name}}</td>
                        <td>{{$track->artist}}</td>
                    @endforeach 
                </tr>      
                <tr class="success">
                    <@foreach(Session::get('result')[1] as $artist)
                        <td>{{$track->name}}</td>
                        <td>{{$track->artist}}</td>
                    @endforeach
                </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection