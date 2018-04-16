<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/css/admin/playlist.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="/js/admin/admin.js"></script>
    <script src="/js/admin/playlist.js"></script>
</head>
<body>
<div class="header">

    <a href="{{ route('logout') }}"
       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    <a href="/">Home</a>
    <a href="/admin/track">Track</a>
    <a href="/admin/user">User</a>
</div>
<div class="container-fluid">
    <table id="table" class="table"
           data-pagination="true"
           data-toggle="table"
           data-show-export="true">
        <thead>
        <tr>
            <th>Playlist</th>
            <th>Username</th>
            <th>User's email</th>
            {{--<th>Track Name</th>--}}
            {{--<th>Album</th>--}}
            {{--<th>Artist</th>--}}
            {{--<th>Price</th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($lists as $list)
            <tr class=>
                <td style="display: none;">{{$list->playlist->id}}</td>
                <td>{{$list->playlist->name}}</td>
                <td>{{$list->playlist->user->username}}</td>
                <td>{{$list->playlist->user->email}}</td>
                {{--<td>{{$list->track->name}}</td>--}}
                {{--<td>{{$list->track->album}}</td>--}}
                {{--<td>{{$list->track->artist}}</td>--}}
                {{--<td>{{$list->track->price}}</td>--}}
                <td>
                    <a class="save" title="Save" data-toggle="tooltip"><i class="material-icons">&#xE876;</i></a>
                    <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                    <a class="cancel" title="Cancel" data-toggle="tooltip"><i class="material-icons">&#xE14C;</i></a>
                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $lists->links() !!}
</div>
{{--@foreach($lists as $list)--}}
    {{--<div class="modal-content">--}}
        {{--<div class="modal-header">--}}
            {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
            {{--<h4 class="modal-title">Close</h4>--}}
        {{--</div>--}}
        {{--<div class="modal-body">--}}
            {{--<div class="container">--}}
                {{--<table class="table">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th>Track Name</th>--}}
                        {{--<th>Album</th>--}}
                        {{--<th>Artist</th>--}}
                        {{--<th>Price</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--<tr>--}}
                        {{--<td>{{$list->track->name}}</td>--}}
                        {{--<td>{{$list->track->album}}</td>--}}
                        {{--<td>{{$list->track->artist}}</td>--}}
                        {{--<td>{{$list->track->price}}</td>--}}
                    {{--</tr>--}}
                    {{--</tbody>--}}
                {{--</table>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="modal-footer">--}}
            {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endforeach--}}
</body>
</html>