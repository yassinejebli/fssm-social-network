<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Conversation extends Eloquent
{
    protected $collection = 'converstions_collection';
    protected $connection = 'mongodb';
    protected  $fillable = ['user1','user2','messages'];

    public function user1()
    {
        return $this->belongsTo("App\User");
    }

    public function user2()
    {
        return $this->belongsTo("App\User");
    }


    public function messages()
    {
        return $this->hasMany("App\Message");
    }


}
