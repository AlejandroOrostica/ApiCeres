<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastName', 'email', 'userType', 'userDescription', 'userPhoto', 'userCharge','access_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAvatarAttribute($val)
    {
        return is_null($val) ? asset('images/avatar-placeholder.svg') : $val;
    }

    public function projects()
    {
        return $this->hasMany('App\Project');
    }

    public function grades()
    {
        return $this->hasMany('App\Grade');
    }

    public function pages()
    {
        return $this->hasMany('App\Page');
    }

      public function file()
    {
        return $this->hasOne('App\File');
    }


}