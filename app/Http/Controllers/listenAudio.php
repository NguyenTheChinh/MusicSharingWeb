<?php

namespace App\Http\Controllers;
use App\Track;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class listenAudio extends Controller
{
    public function getIndex($nameSong, $idSong){
        $track = Track::find($idSong);
        $track->listen=$track->listen;
        $track->save();
        $genre=$track->genre_id;
        $releatedSong = Track::where('genre_id', '=', $genre)->get();
        $id_track=$idSong;
        $comments=Comment::where('id_track','=',$track->id)->get();
        

        return view('musicWorld.audio',['nameSong'=>$nameSong,'idSong'=>$idSong,'comments'=>$comments,'releatedSong'=>$releatedSong,]);
       	
    }

   
    
    public function comments(Request $request) {


    	$Comment = new Comment();
    	
    	
    	$Comment->id_track = $request->input('idSong') ;
    	$Comment->content = $request->input('comment');
    	$Comment->id_user = Auth::user()->id;
    	$Comment->save();
    	//return view('musicWorld.audio');
}

}

