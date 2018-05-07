<?php

namespace App\Http\Controllers;
use App\Track;
use Illuminate\Http\Request;

class listenAudio extends Controller
{
    public function getIndex($nameSong, $idSong){
        $track = Track::find($idSong);
        $track->listen=$track->listen+1;
        $track->save();
        $genre=$track->genre_id;
        $releatedSong = Track::where('genre_id', '=', $genre)->get();
        $playlist = \DB::table('playlist')->get();
        return view('musicWorld.audio',['nameSong'=>$nameSong,'idSong'=>$idSong,'releatedSong'=>$releatedSong,'playlist'=>$playlist]);
    }
}