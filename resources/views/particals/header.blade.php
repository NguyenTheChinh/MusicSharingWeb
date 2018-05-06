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
                    @if (Route::has('login'))
                        @auth
                            {!! \Illuminate\Support\Facades\Auth::user()->level == 1 ? '<li><a href="/admin"">ADMIN</a></li>' : "" !!}
                        @endauth
                    @endif
                    <li><a href="/">HOME</a></li>
                    <li><a href="" data-toggle="modal" data-target="#myModalCreatePlaylist">CREATE PLAYLIST</a></li>
                    <li><a href="/upload">UPLOAD YOUR SONG</a></li>
                    <li class="dropdown">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    LOGOUT
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            @else
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">USER
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('login') }}">LOGIN</a></li>
                                    <li><a href="{{ route('register') }}">REGISTER</a></li>
                                </ul>
                            @endauth
                        @endif
                    </li>
                    <li><a href="/search" id="searchIconNavbar"><span class="glyphicon glyphicon-search"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- The form -->
</div>
