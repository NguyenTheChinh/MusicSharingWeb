<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;
use App\Playlist;

class controllerSearch extends Controller
{
    public function search(Request $request){
        $key = $request->input('search');
        $key = '%'.$key.'%';
        $track = Track::where('name', 'like', $key)->get();
        $artist = Track::where('artist', 'like', $key)->get();
        $playlist = Playlist::where('name', 'like', $key)->get();
        return back()->with('result', [$track, $artist, $playlist]);
    }
}
