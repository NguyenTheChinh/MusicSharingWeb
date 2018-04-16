<?php

namespace App\Http\Controllers;
use app\Track;
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
            return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong]);
        }
        if($nameGenre==="ratingHouse"){
            $ratingSong= \DB::table('track')
                ->where('genre_id','2')
                ->orderBy('listen', 'desc')
                ->limit(10)
                ->get();
            return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong]);
        }
        if($nameGenre==="ratingDubstep"){
            $ratingSong=\DB::table('track')
                ->where('genre_id','3')
                ->orderBy('listen', 'desc')
                ->limit(10)
                ->get();
            return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong]);
        }
        if($nameGenre==="ratingTrap"){
            $ratingSong= \DB::table('track')
                ->where('genre_id','4')
                ->orderBy('listen', 'desc')
                ->limit(10)
                ->get();
            return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong]);
        }
        if($nameGenre==="ratingDrumBass"){
            $ratingSong= \DB::table('track')
                ->where('genre_id','5')
                ->orderBy('listen', 'desc')
                ->limit(10)
                ->get();
            return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong]);
        }
        if($nameGenre==="ratingTrance"){
            $ratingSong= \DB::table('track')
                ->where('genre_id','6')
                ->orderBy('listen', 'desc')
                ->limit(10)
                ->get();
            return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong]);
        }
    }
}
