<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userr extends Model
{
    //
    public function myCompany()
    {
        return $this->hasOne('App\Companny');
    }
}
