<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $table = "track";
    protected $fillable = ['name', 'album', 'artist', 'date', 'price', 'genre_id', 'uploaded_by'];
    public $timestamps = false;

    public function Genre()
    {
        return $this->belongsTo('App\Genre', 'genre_id', 'id');
    }

    public function ListTracK()
    {
        return $this->hasMany('App\ListTrack', 'track_id', 'id');
    }

    public function TrackBuyed()
    {
        return $this->hasMany('App\TrackBought', 'track_id', 'id');
    }

    public function User()
    {
        return $this->belongsTo('App\User', 'uploaded_by', 'id');
    }

}
