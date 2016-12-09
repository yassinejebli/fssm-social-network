<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Formation extends Eloquent
{
    private $id;
    private $intitule;
    private $ecole;
    private $description;
    private $date_depart;
    private $date_fin;
    private $diplome;
    private $discipline;

    protected $collection = 'formations_collection';




}
