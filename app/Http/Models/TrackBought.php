<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackBought extends Model
{
    protected $table="track_bought";
    public function Track(){
        return $this->belongsTo('App\Track','track_id','id');
    }
    public function User(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
