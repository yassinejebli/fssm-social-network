<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Message extends Eloquent
{
    protected $collection = 'messages_collection';
    protected $connection = 'mongodb';
    protected  $fillable = ['message','user','conversation'];

    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function Conversation()
    {
        return $this->belongsTo("App\Conversation");
    }




}
