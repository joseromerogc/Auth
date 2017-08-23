<?php

namespace ViveAuth\Perfil;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    
    public function users()
    {
        return $this->hasMany('ViveAuth\User');
    }
}
