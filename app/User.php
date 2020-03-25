<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Symfony\Component\HttpFoundation\Request;

class User extends Model implements Authenticatable
{
    use Notifiable;
    use Authenticatable;

    protected $table='users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id', 'confirm_code', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types
     *
     * @var array
     */

}
