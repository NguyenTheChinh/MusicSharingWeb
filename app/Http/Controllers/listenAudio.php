<?php

namespace App\Http\Controllers;
use app\Track;
use Illuminate\Http\Request;

class listenAudio extends Controller
{
    public function getIndex($nameSong, $idSong){
        return view('musicWorld.audio',['nameSong'=>$nameSong,'idSong'=>$idSong]);
    }
}
