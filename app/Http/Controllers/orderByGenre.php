<?php

namespace App\Http\Controllers;
use app\Track;
use app\ListTrack;
use app\Playlist;
use Illuminate\Http\Request;

class orderByGenre extends Controller
{
    public function getIndex($nameGenre){
        if($nameGenre==="ratingDanceEDM"){
            $ratingSong= \DB::table('track')
                ->where('genre_id','1')
                ->orderBy('listen', 'desc')
                ->limit(10)
                ->get();
            $playlist = \DB::table('playlist')->get();
            return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong],['playlist'=> $playlist]);
        }
        if($nameGenre==="ratingHouse"){
            $ratingSong= \DB::table('track')
                ->where('genre_id','2')
                ->orderBy('listen', 'desc')
                ->limit(10)
                ->get();
                $playlist = \DB::table('playlist')->get();
                return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong],['playlist'=> $playlist]);
        }
        if($nameGenre==="ratingDubstep"){
            $ratingSong=\DB::table('track')
                ->where('genre_id','3')
                ->orderBy('listen', 'desc')
                ->limit(10)
                ->get();
                $playlist = \DB::table('playlist')->get();
                return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong],['playlist'=> $playlist]);
        }
        if($nameGenre==="ratingTrap"){
            $ratingSong= \DB::table('track')
                ->where('genre_id','4')
                ->orderBy('listen', 'desc')
                ->limit(10)
                ->get();
                $playlist = \DB::table('playlist')->get();
                return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong],['playlist'=> $playlist]);
        }
        if($nameGenre==="ratingDrumBass"){
            $ratingSong= \DB::table('track')
                ->where('genre_id','5')
                ->orderBy('listen', 'desc')
                ->limit(10)
                ->get();
                $playlist = \DB::table('playlist')->get();
                return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong],['playlist'=> $playlist]);return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong]);
        }
        if($nameGenre==="ratingTrance"){
            $ratingSong= \DB::table('track')
                ->where('genre_id','6')
                ->orderBy('listen', 'desc')
                ->limit(10)
                ->get();
                $playlist = \DB::table('playlist')->get();
                return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong],['playlist'=> $playlist]);
        }
    }
}
