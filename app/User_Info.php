<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Info extends Model
{
    //
    public function myCompany()
    {
        return $this->hasOne('App\Companny');

        return $this->hasOne('App\Companny', 'user_id', 'id');//foreign key has different name

         // one to many relation
         return $this->hasMany('Model path', 'foreign key', 'local key');
    }
}
