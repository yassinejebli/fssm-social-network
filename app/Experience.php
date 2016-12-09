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
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * @param mixed $intitule
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    }

    /**
     * @return mixed
     */
    public function getNomEntreprise()
    {
        return $this->nom_entreprise;
    }

    /**
     * @param mixed $nom_entreprise
     */
    public function setNomEntreprise($nom_entreprise)
    {
        $this->nom_entreprise = $nom_entreprise;
    }

    /**
     * @return mixed
     */
    public function getVilleEntreprise()
    {
        return $this->ville_entreprise;
    }

    /**
     * @param mixed $ville_entreprise
     */
    public function setVilleEntreprise($ville_entreprise)
    {
        $this->ville_entreprise = $ville_entreprise;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * @param mixed $date_debut
     */
    public function setDateDebut($date_debut)
    {
        $this->date_debut = $date_debut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * @param mixed $date_fin
     */
    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param string $collection
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
    }




}
