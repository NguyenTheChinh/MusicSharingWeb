<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Users extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    protected $table = "users";

    protected $fillable = ['name', 'email', 'password', 'password_confirmation', 'updated_at', 'created_at', 'full_name'];

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
