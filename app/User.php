<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function Artikel(){
        return $this->hasMany('App\Artikel','user_id');
    }
    public function Komentar(){
        return $this->hasMany('App\Komentar','komentar_id');
    }
    public function Role(){
        return $this->belongsToMany('App\Role','role_user', 'role_id','user_id');
    }
}
