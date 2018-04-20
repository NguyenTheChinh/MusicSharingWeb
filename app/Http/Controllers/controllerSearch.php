<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;
use App\Playlist;

class controllerSearch extends Controller
{
    public function search(Request $request){
        $key = $request->input('search');
        $track = Track::where('name', '=', $key)->get();
        $artist = Track::where('artist', '=', $key)->get();
        $playlist = Playlist::where('name', '=', $key)->get();
        return back()->with('result', [$track, $artist, $playlist]);
    }
}
