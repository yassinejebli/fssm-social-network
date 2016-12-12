<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Emploi extends Eloquent
{
    private $id;
    private $nom_entreprie;
    private $type_contrat;
    private $poste;
    protected $collection = 'emplois_collection';

    public function user()
    {
        return $this->belongsTo("App\User");
    }


}
