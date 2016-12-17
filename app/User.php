<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent implements Authenticatable {

    protected $collection = 'users_collection';
    protected $connection = 'mongodb';
    protected  $fillable = ['password', 'email','fullName','address','gender','photo','formations','experiences'];

    public function formations()
    {
        return $this->hasMany("App\Formation");
    }

    public function competences()
    {
        return $this->hasMany("App\Competence");
    }

    public function experiences()
    {
        return $this->hasMany("App\Experience");
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

    use \Illuminate\Auth\Authenticatable;
}

?>