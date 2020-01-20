<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'name', 'account', 'password', 'level'
    ];

    protected $hidden = [
        'password'
    ];

    const ADMIN = 2;
    const MEMBER = 1;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //check Pass
    public static function passwordCorrect($suppliedPassword)
    {
        return Hash::check($suppliedPassword, Auth::user()->password, []);
    }
    //end-check
}
