<?php

namespace App\Http\Controllers;
use app\Track;
use Illuminate\Http\Request;

class orderByGenre extends Controller
{
    public function getIndex($nameGenre){
        if($nameGenre==="ratingDanceEDM"){
            $ratingSong= \DB::table('track')->where('genre_id','1')->get();
            return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong]);
        }
        if($nameGenre==="ratingHouse"){
            $ratingSong= \DB::table('track')->where('genre_id','2')->get();
            return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong]);
        }
        if($nameGenre==="ratingDubstep"){
            $ratingSong= \DB::table('track')->where('genre_id','3')->get();
            return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong]);
        }
        if($nameGenre==="ratingTrap"){
            $ratingSong= \DB::table('track')->where('genre_id','4')->get();
            return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong]);
        }
        if($nameGenre==="ratingDrumBass"){
            $ratingSong= \DB::table('track')->where('genre_id','5')->get();
            return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong]);
        }
        if($nameGenre==="ratingTrance"){
            $ratingSong= \DB::table('track')->where('genre_id','6')->get();
            return view('musicWorld.ratingSongGenre',['ratingSong'=> $ratingSong]);
        }
    }
}
