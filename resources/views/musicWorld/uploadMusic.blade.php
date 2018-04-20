@extends('layouts.master');

@section('content')
    <div class="container form-upload">
        <h3 class="text-center">Upload your music to the world</h3>
        <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row" style="margin-bottom: 15px;">
                <label class="col-md-4 col-md-push-2">Track Name: </label>
                <input type="text" name="name" class="col-md-4 col-md-push-1" value="{{ old('name') }}" required>
                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
            <div class="row"  style="margin-bottom: 15px;">
                <label class="col-md-4 col-md-push-2">Album Name: </label>
                <input type="text" name="album" class="col-md-4 col-md-push-1" value="{{ old('album') }}" required>
                @if ($errors->has('album'))
                    <span class="help-block">
                    <strong>{{ $errors->first('album') }}</strong>
                </span>
                @endif
            </div>
            <div class="row"  style="margin-bottom: 15px;">
                <label class="col-md-4 col-md-push-2">Artist: </label>
                <input type="text" name="artist" class="col-md-4 col-md-push-1" value="{{ old('artist') }}" required>
                @if ($errors->has('artist'))
                    <span class="help-block">
                    <strong>{{ $errors->first('artist') }}</strong>
                </span>
                @endif
            </div>
            <div class="row"  style="margin-bottom: 15px;">
                <label class="col-md-4 col-md-push-2">Price: </label>
                <input type="number" name="price" class="col-md-4 col-md-push-1" value="{{ old('price') }}" required>
                @if ($errors->has('price'))
                    <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
                @endif
            </div>
            <div class="row"  style="margin-bottom: 15px;">
                <label class="col-md-4 col-md-push-2">Genre: </label>
                <select name="genre" class="col-md-4 col-md-push-1" value="{{ old('genre') }}" required>
                    @foreach($genre as $gen)
                        <option value="{{$gen->id}}">{{$gen->name}}</option>
                    @endforeach
                    @if ($errors->has('price'))
                        <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
                @endif
            </div>
            <div class="row"  style="margin-bottom: 15px;">
                <label class="col-md-4 col-md-push-2">Select File: </label>
                <input type="file" name="trackUpload" accept="audio/*" class="col-md-4 col-md-push-1" required>
            </div>
            @if ($errors->has('trackUpload'))
                <span class="help-block">
                    <strong>{{ $errors->first('trackUpload') }}</strong>
                </span>
            @endif
            <div class="row"  style="margin-bottom: 15px;">
                <label class="col-md-4"></label>
                <button type="submit" class="col-md-2 col-md-push-3 btn btn-primary" >Upload</button>
            </div>
        </form>
        @if(Session::has('success'))
            <div class="success alert-success">{{Session::get('success')}}</div>
        @endif
    </div>

@endsection