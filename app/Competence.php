<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Competence extends Eloquent
{
    protected $collection = 'competences_collection';
    protected $connection = 'mongodb';
    protected  $fillable = ['intitule'];

    public function user()
    {
        return $this->belongsTo("App\User");
    }

}
