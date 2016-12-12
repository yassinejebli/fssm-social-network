<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Formation extends Eloquent {

    protected $collection = 'formations_collection';
    protected $connection = 'mongodb';
    protected  $fillable = ['ecole', 'diplome','discipline','anneeDepart','anneeFin','description','user'];

    public function user()
    {
        return $this->belongsTo("App\User");
    }
}

?>