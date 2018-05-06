<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = "playlist";
    protected $fillable = ['name', 'user_id'];
    public $timestamps = true;

    public function ListTrack()
    {
        return $this->hasMany('App\ListTrack', 'playlist_id', 'id');
    }

    public function User()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}
