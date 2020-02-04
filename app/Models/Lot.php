<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
 
 
    //
    public function home(){
        return $this->hasMany('App\Models\Home');
    }
}
