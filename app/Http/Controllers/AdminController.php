<?php

namespace App\Http\Controllers;

use App\Genre;
use App\ListTrack;
use App\Playlist;
use App\Track;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            if ($this->user->level==0) {
                return back();
            }
            return $next($request);
        });
    }

    public function getView()
    {
        return view('admin/admin');
    }

    public function getUserView()
    {
        $users = User::where('level','=',0)->paginate(8);
        $users->setPath('/admin/user');
        return view('admin/user')->with('users', $users);
    }

    public function getTrackView()
    {
        $track = Track::paginate(8);
        return view('admin/track')->with('tracks', $track);
    }

    public function getPlaylistView()
    {
        $lists = ListTrack::groupby('playlist_id')->paginate(8);
        $listTrack = ListTrack::paginate(8);
        return view('admin/playlist', ['lists' => $lists, 'listTracks' => $listTrack]);
    }

    public function updateUser(Request $request)
    {
        $request->id = (int)$request->id;
        $request->birthday = date('Y-m-d', strtotime($request->birthday));
        $request->wallet = (double)$request->wallet;
        $request->validate([
            'id' => 'required|numeric',
            'username' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'birthday' => 'required|date|before:today',
            'email' => 'required|string|email|max:255',
            'wallet' => 'required|numeric|min:0',
            'phone' => array('required', 'string', 'regex:/(09)[0-9]{8}|(01)[0-9]{9}/'),
        ]);
        DB::table('user')
            ->where('id', (int)$request->id)
            ->update([
                'username' => $request->username,
                'full_name' => $request->full_name,
                'birthday' => $request->birthday,
                'email' => $request->email,
                'phone' => $request->phone,
                'wallet' => $request->wallet
            ]);
        return;
    }

    public function deleteUser(Request $request)
    {
        $request->id = (int)$request->id;
        User::destroy($request->id);
        DB::table('playlist')->where('user_id','=',$request->id)->delete();
        DB::table('list_track')->where('playlist_user_id','=',$request->id)->delete();
        DB::table('track_bought')->where('user_id','=',$request->id)->delete();
    }

    public function updateTrack(Request $request)
    {
        $request->id = (int)$request->id;
        $request->price = (int)$request->price;
        $request->merge(['genre_id' => DB::table('genre')->where('name', $request->genre)->value('id')]);
        $request->validate([
            'id' => 'required|numeric',
            'name' => 'required|string|max:255',
            'album' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'price' => 'required|numeric|min:10000',
            'genre_id' => 'required|numeric|min:1'
        ]);
        DB::table('track')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name,
                'album' => $request->album,
                'artist' => $request->artist,
                'price' => $request->price,
                'genre_id' => $request->genre_id
            ]);
        return;
    }

    public function deleteTrack(Request $request)
    {
        $request->id = (int)$request->id;
        Track::destroy($request->id);
        DB::table('list_track')->where('track_id','=',$request->id)->delete();
        DB::table('track_bought')->where('track_id','=',$request->id)->delete();
        return;
    }

    public function updatePlaylist(Request $request)
    {
        DB::table('playlist')
            ->where('id', (int)$request->id)
            ->update(['name' => $request->name]);
        return;
    }

    public function deletePlaylist(Request $request)
    {
        $request->id = (int)$request->id;
        Playlist::destroy($request->id);
        DB::table('list_track')->where('playlist_id','=',$request->id)->delete();
        return;
    }
}