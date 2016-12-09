<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Membre extends Eloquent
{
    private $id;
    private $nom;
    private $prenom;
    private $mail;
    private $tel;
    private $adresse;
    private $password;
    private $photo;
    private $formations = array();
    private $reseau_socials = array();
    private $experiences = array();
    private $stages = array();
    private $publications = array();
    private $competences = array();

    protected $collection = 'membres_collection';

    /**
     * @return array
     */
    public function getCompetences()
    {
        return $this->competences;
    }

    /**
     * @param array $competences
     */
    public function setCompetences($competences)
    {
        $this->competences = $competences;
    }

    /**
     * @return array
     */
    public function getReseauSocials()
    {
        return $this->reseau_socials;
    }

    /**
     * @param array $reseau_socials
     */
    public function setReseauSocials($reseau_socials)
    {
        $this->reseau_socials = $reseau_socials;
    }

    /**
     * @return array
     */
    public function getExperiences()
    {
        return $this->experiences;
    }

    /**
     * @param array $experiences
     */
    public function setExperiences($experiences)
    {
        $this->experiences = $experiences;
    }

    /**
     * @return array
     */
    public function getStages()
    {
        return $this->stages;
    }

    /**
     * @param array $stages
     */
    public function setStages($stages)
    {
        $this->stages = $stages;
    }

    /**
     * @return array
     */
    public function getPublications()
    {
        return $this->publications;
    }

    /**
     * @param array $publications
     */
    public function setPublications($publications)
    {
        $this->publications = $publications;
    }

    /**
     * @return array
     */


    public function getFormations()
    {
        return $this->formations;
    }

    /**
     * @param array $formations
     */
    public function setFormations($formations)
    {
        $this->formations = $formations;
    }


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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }


}
