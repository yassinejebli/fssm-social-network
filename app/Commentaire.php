<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Commentaire extends Eloquent {

    protected $collection = 'commentaires_collection';
    protected $connection = 'mongodb';
    protected  $fillable = ['contenu', 'user', 'publication_id'];

    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function publication()
    {
        return $this->belongsTo("App\Publication","publication_id");
    }
}

?>