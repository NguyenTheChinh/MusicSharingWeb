<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListTrack extends Model
{
    protected $table = "list_track";
    protected $fillable = ['playlist_id', 'playlist_user_id', 'track_id'];
    public $timestamps = true;

    public function Track()
    {
        return $this->belongsTo('App\Track', 'track_id', 'id');
    }

    public function PlayList()
    {
        return $this->belongsTo('App\Playlist', 'playlist_id', 'id');
    }
}
