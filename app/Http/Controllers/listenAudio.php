<?php

namespace App\Http\Controllers;
use App\Track;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class listenAudio extends Controller
{
	   



    public function getIndex($nameSong, $idSong){
        $track = Track::find($idSong);
        $track->listen=$track->listen;
        $track->save();
        $genre=$track->genre_id;
        $releatedSong = Track::where('genre_id', '=', $genre)->get();
        $id_track=$idSong;
        //$comments=Comment::where('id_track','=',$track->id)->get();
        

        //return view('musicWorld.audio',['nameSong'=>$nameSong,'idSong'=>$idSong, 'releatedSong'=>$releatedSong]);
       	
    

   
         //$data = Comment::select('content','id_user')->where('id_track', $idSong)->get();
        $data = DB::table('Comment')
        ->join('user', 'Comment.id_user', '=', 'user.id')
        ->select('Comment.content', 'user.username')
        ->where('id_track', $idSong)
        ->get();



         return view('musicWorld.audio', ['nameSong'=>$nameSong, 'idSong'=>$idSong, 'releatedSong'=>$releatedSong, 'data'=>$data]);
   }
   public function comment(Request $request, $nameSong, $idSong) {

    	$Comment = new Comment();
    	
    	$Comment->id_track = $request->input('idSong') ;
    	$Comment->content = $request->input('comment');
    	$Comment->id_user = Auth::user()->id;
    	$Comment->save();

      $track = Track::find($idSong);
        $track->listen=$track->listen;
        $track->save();
        $genre=$track->genre_id;
        $releatedSong = Track::where('genre_id', '=', $genre)->get();
        $id_track=$idSong;
        
         //$data = Comment::select('content','id_user')->where('id_track', $idSong)->get();
        $data = DB::table('Comment')
        ->join('user', 'Comment.id_user', '=', 'user.id')
        ->select('Comment.content', 'user.username')
        ->where('id_track', $idSong)
        ->get();
         return view('musicWorld.audio', ['nameSong'=>$nameSong, 'idSong'=>$idSong, 'releatedSong'=>$releatedSong, 'data'=>$data]);
   }

}

