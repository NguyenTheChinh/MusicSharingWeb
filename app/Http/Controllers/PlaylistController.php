<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Playlist as PlaylistModel;

use App\ListTrack as ListTrackModel;

use DB;

class PlaylistController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }


    public function get (Request $request) {
        return PlaylistModel::all();
    }


    public function create(Request $request)
    {
        $name = $request->input('name');

        $playlist =  new PlaylistModel();
        $playlist->name = $name;
        $playlist->save();
        return $playlist;
    }

    public function delete(Request $request, $id){
        DB::table('playlist')->where('id', $id)->delete();
    }

    public function insertTracktoList(Request $request, $track_id, $playlist_id ){
        $playlist_user_id = DB::table('list_track')->where('track_id', $track_id)-> where('playlist_id', $playlist_id)->first();
        print_r($playlist_user_id);
        if (!$playlist_user_id) {
            $playlist = new ListTrackModel();
            $playlist->playlist_id = $playlist_id;
            $playlist->track_id = $track_id;
            $playlist->save();
            return $playlist;
        }
    }

    public function deleteTrackfromList(Request $request, $track_id, $playlist_id){
        DB::table('list_track')->where('track_id', $track_id)-> where('playlist_id', $playlist_id)->delete();
    }
}
