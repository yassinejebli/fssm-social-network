<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Conversation extends Eloquent
{
    protected $collection = 'conversations_collection';
    protected $connection = 'mongodb';
    protected  $fillable = ['user','user2_id','messages'];

    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function user2()
    {
        return $this->belongsTo("App\User",'user2_id');
    }

    public function messages()
    {
        return $this->hasMany("App\Message");
    }



}
