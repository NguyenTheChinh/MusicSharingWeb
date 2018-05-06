@extends('layouts.master')
@section('title')
    Create Playlist
@endsection

@section('content')
    <div class="container">
        <h3 class="text-center">Create your playlist</h3>
        <div class="row">
            <div class="col-md-8 col-md-push-2">
            <form action="/playlist" method="POST" class="form-inline">
                <input type="text" size="45" name="namePlaylist" placeholder="Create your playlist.....">
                <button type="submit" class="btn btn-primary" style="margin-bottom:5px">create</button>
            </form>
            </div>
        </div>
    </div>
@endsection