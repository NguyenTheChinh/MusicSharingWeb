<div class="musicSharingHeading">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Music world</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">HOME</a></li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">PLAYLIST <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="position : absolute; left : -1px; width : 190px">
                                <li><a href="/createPlaylist">Create Playlist</a></li>
                                <li><a href="/getPlaylist">Your Playlist</a></li>
                            </ul>
                        </li>
                        <li><a href="/upload">UPLOAD YOUR SONG</a></li>
                        <li><a href="">ADMIN</a></li>
                        <li class="dropdown">
                            @if (Route::has('login'))
                                    @auth
                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    @else
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">USER
                                        <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                        </ul>
                                    @endauth
                            @endif
                        </li>
                        <li><a href="/search" id="searchIconNavbar"><span class="glyphicon glyphicon-search"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- The form -->
</div>
