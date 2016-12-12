<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Publication extends Eloquent
{
    private $id;
    private $contenu;
    private $date_creation;
    private $image;
    protected $collection = 'publications_collection';

    public function user()
    {
        return $this->belongsTo("App\User");
    }


}
