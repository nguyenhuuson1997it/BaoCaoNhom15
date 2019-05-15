<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Product;
use App\Comment;

class User extends Authenticatable
{
    use Notifiable;

    protected $table ='users';

    protected $fillable = [
        'username', 'email', 'password','avatar','level','remember_token'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = true;

    public function product(){
        return $this->hasMany('App\Product');
    }

    public function comment(){
        return $this->hasMany('App\Comment');
    }

}
