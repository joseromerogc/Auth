<?php

namespace ViveAuth\Perfil;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{   
    public $timestamps=false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'apodo', 'perfil', 'country_id','genero','user_id'
    ];
    protected $guarded=[
    ];

    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo('ViveAuth\User');

    }
    public function country()
    {
        return $this->belongsTo('ViveAuth\Perfil\Country');
    }
}
