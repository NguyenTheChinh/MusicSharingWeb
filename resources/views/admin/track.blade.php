<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/css/admin/track.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="/js/admin/admin.js"></script>
    <script src="/js/admin/track.js"></script>
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
    <a href="/admin/playlist">Playlist</a>
    <a href="/admin/user">User</a>
</div>
<div class="container-fluid">
    <table id="table" class="table"
           data-pagination="true"
           data-toggle="table"
           data-show-export="true">
        <thead>
        <tr>
            <th>Name</th>
            <th>Album</th>
            <th>Artist</th>
            <th>Uploaded At</th>
            <th>Price</th>
            <th>Genre</th>
            <th>Uploaded By</th>
            <th>Views</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tracks as $track)
            <tr class=>
                <td style="display: none;">{{$track->id}}</td>
                <td>{{$track->name}}</td>
                <td>{{$track->album}}</td>
                <td>{{$track->artist}}</td>
                <td>{{$track->date}}</td>
                <td>{{$track->price}}</td>
                <td>{{$track->genre->name}}</td>
                <td>{{$track->user->username or ""}}</td>
                <td>{{$track->listen}}</td>
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
    {!! $tracks->links() !!}
</div>
</body>
</html>