<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Track;
use App\TrackBought;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrackController extends Controller
{
    public function getUploadForm()
    {
        $genre = Genre::all();
        return view('musicWorld.uploadMusic')->with("genre", $genre);
    }

    public function uploadFile(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'album' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'price' => 'required|numeric|min:10000',
            'trackUpload' => 'required|mimetypes:audio/*',
        ]);
        $file = $request->file('trackUpload');
        $fileName = $request->input('name') . '-' . (Track::max('id') + 1) . '.' . $file->getClientOriginalExtension();
        $file->move('upload', $fileName);
        Track::create([
            'name' => $request->input('name'),
            'album' => $request->input('album'),
            'artist' => $request->input('artist'),
            'date' => date('Y-m-d H:i:s'),
            'price' => $request->input('price'),
            'genre_id' => $request->input('genre'),
            'uploaded_by' => Auth::user()->id,
        ]);
        return back()->with('success', 'Upload Success!');
    }

    public function downloadFile($name, $id)
    {
        $user = Auth::user();
        $track = Track::find($id);
        $is_bought = TrackBought::where([['user_id', '=', $user->id], ['track_id', '=', $id]])->get();
        if (count($is_bought) == 0) {
            if ($user->wallet < $track->price) {
                return ;
            }
            $user->wallet = $user->wallet - $track->price;
            $user->save();
            TrackBought::create([
                'user_id' => $user->id,
                'track_id' => $id
            ]);
        }
        $file = public_path('/upload/'.$name.'-'.$id.'.mp3');
        $headers = ['Content-Type: audio/mpeg'];
        $nameFile = $name . "-" . $track->artist;
        return response()->download($file, $nameFile, $headers);
    }
}
