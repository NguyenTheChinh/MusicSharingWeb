<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Track;
use app\Playlist;
class songInTrack extends Controller
{
    public function getIndex(){
        $dataInTrack = \DB::table('track')
            ->orderBy('listen', 'desc')
            ->limit(10)
            ->get();
        $playlist = \DB::table('playlist')->get();
        return view('musicWorld.index',['dataInTrack'=> $dataInTrack],['playlist'=> $playlist]);
    }
}
