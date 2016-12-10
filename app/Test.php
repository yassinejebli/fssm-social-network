<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Test extends Eloquent implements Authenticatable {

    protected $collection = 'users_collection';
    protected $connection = 'mongodb';
    protected  $fillable = ['password', 'email','fullName','address','gender'];
    use \Illuminate\Auth\Authenticatable;
}

?>