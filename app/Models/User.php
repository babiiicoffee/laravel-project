<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password'
    ];

    protected $table = "user";

    public function account()
    {
        return $this->belongsTo('App\User',"userId" , "id");
    }
}
