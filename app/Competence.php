<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Competence extends Eloquent
{
    private $id;
    private $itntitule;
    private $description;

    protected $collection = 'competences_collection';

    public function user()
    {
        return $this->belongsTo("App\User");
    }

}
