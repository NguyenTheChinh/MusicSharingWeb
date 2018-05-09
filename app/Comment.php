<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $table = 'Comment';
    protected $fillable = ['id_song', 'content', 'id_user'];
    public $timestamps = false;

}
