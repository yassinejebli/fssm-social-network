<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent implements Authenticatable {

    protected $collection = 'users_collection';
    protected $connection = 'mongodb';
    protected  $fillable = ['password', 'email','fullName','address','gender','photo','formations','experiences','langues','publications','conversations','messages','commentaires'];

    public function formations()
    {
        return $this->hasMany("App\Formation");
    }

    public function commentaires()
    {
        return $this->hasMany("App\Commentaire");
    }

    public function competences()
    {
        return $this->hasMany("App\Competence");
    }

    public function experiences()
    {
        return $this->hasMany("App\Experience");
    }

    public function langues()
    {
        return $this->hasMany("App\Langue");
    }
    public function stages()
    {
        return $this->hasMany("App\Stage");
    }

    public function publications()
    {
        return $this->hasMany("App\Publication");
    }

    public function evenements()
    {
        return $this->hasMany("App\Evenement");
    }

    public function emplois()
    {
        return $this->hasMany("App\Emploi");
    }

    public function conversations()
    {
        return $this->hasMany("App\Conversation");
    }


    public function messages()
    {
        return $this->hasMany("App\Message");
    }

    use \Illuminate\Auth\Authenticatable;
}

?>