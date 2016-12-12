<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Reseau_social extends Eloquent
{
    private $id;
    private $type;
    private $mail;

    protected $collection = 'reseau_socials_collection';

    public function user()
    {
        return $this->belongsTo("App\User");
    }

}
