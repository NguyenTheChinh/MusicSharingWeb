<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Notifications\Notifiable;


class User extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, Notifiable;
    protected $fillable = ['username', 'password', 'full_name', 'birthday', 'email', 'phone', 'wallet'];
    protected $hidden = ['password', 'remember_token', 'level'];
    protected $table = "user";
    public $timestamps = false;

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
        return $this->hasMany('App\Track', 'uploaded_by', 'id');
    }
}
