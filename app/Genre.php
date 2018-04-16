<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = "genre";
    protected $fillable = ['name'];
    public $timestamps = false;

    public function Track()
    {
        return $this->hasMany('App\Track', 'genre_id', 'id');
    }
}
