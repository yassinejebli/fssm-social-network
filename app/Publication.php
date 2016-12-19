<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Publication extends Eloquent
{

    protected $collection = 'publications_collection';
    protected $connection = 'mongodb';
    protected  $fillable = ['contenu','image','user'];

    public function user()
    {
        return $this->belongsTo("App\User");
    }


}
