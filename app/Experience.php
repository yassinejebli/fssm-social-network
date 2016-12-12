<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Experience extends Eloquent
{
    private $id;
    private $intitule;
    private $nom_entreprise;
    private $ville_entreprise;
    private $date_debut;
    private $date_fin;
    private $description;

    protected $collection = 'experiences_collection';

    public function user()
    {
        return $this->belongsTo("App\User");
    }




}
