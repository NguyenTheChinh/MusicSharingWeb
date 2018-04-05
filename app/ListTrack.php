<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListTrack extends Model
{
    protected $table = "list_track";

    public function Track()
    {
        return $this->belongsTo('App\Track', 'track_id', 'id');
    }

    public function PlayList()
    {
        return $this->belongsTo('App\Playlist', 'playlist_id', 'id');
    }
}
