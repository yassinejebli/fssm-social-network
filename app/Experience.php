<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Experience extends Eloquent
{
    protected $collection = 'experiences_collection';
    protected $connection = 'mongodb';
    protected  $fillable = ['poste', 'entreprise','lieu','dateDebut','dateFin','description'];

    public function user()
    {
        return $this->belongsTo("App\User");
    }




}
