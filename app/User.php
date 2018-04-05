<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";

    public function PlayList()
    {
        return $this->hasMany('App\Playlist', 'user_id', 'id');
    }

    public function TrackBuyed()
    {
        return $this->hasMany('App\TrackBought', 'user_id', 'id');
    }

    public function Track()
    {
        return $this->hasMany('App\Track', 'user_id', 'id');
    }
}
