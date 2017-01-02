<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Publication extends Eloquent
{

    protected $collection = 'publications_collection';
    protected $connection = 'mongodb';
    protected  $fillable = ['contenu','photo','id','typePublication','titre','niveauEtude','pays','ville','adresse', 'description','image','urlSource','delais','nomEntreprise','posteDesire','dateDebut','dateFin','typeContrat','domaine','typeFormation','rythmeFormation','user', 'commentaires'];


    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function commentaires()
    {
        return $this->hasMany("App\Commentaire");
    }


}
