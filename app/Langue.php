<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Langue extends Eloquent
{
    protected $collection = 'langues_collection';
    protected $connection = 'mongodb';
    protected  $fillable = ['intitule','description'];

    public function user()
    {
        return $this->belongsTo("App\User");
    }

}
