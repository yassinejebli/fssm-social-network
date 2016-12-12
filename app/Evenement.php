<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Evenement extends Eloquent
{
    private $id;
    private $intitule;
    private $date;
    private $lieu;
    private $type;
    protected $collection = 'evenements_collection';

    public function user()
    {
        return $this->belongsTo("App\User");
    }

}
