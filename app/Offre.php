<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Offre extends Eloquent
{
    private $id;
    private $nom_entreprie;
    private $type_contrat;
    private $poste;
    protected $collection = 'offres_collection';

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNomEntreprie()
    {
        return $this->nom_entreprie;
    }

    /**
     * @param mixed $nom_entreprie
     */
    public function setNomEntreprie($nom_entreprie)
    {
        $this->nom_entreprie = $nom_entreprie;
    }

    /**
     * @return mixed
     */
    public function getTypeContrat()
    {
        return $this->type_contrat;
    }

    /**
     * @param mixed $type_contrat
     */
    public function setTypeContrat($type_contrat)
    {
        $this->type_contrat = $type_contrat;
    }

    /**
     * @return mixed
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * @param mixed $poste
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
    }


}
