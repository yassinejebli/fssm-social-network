<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Stage extends Eloquent
{
    private $id;
    private $nom_entreprise;
    private $poste;
    private $date_debut;
    private $date_fin;
    private $description;
    protected $collection = 'stages_collection';

    public function user()
    {
        return $this->belongsTo("App\User");
    }


}
