<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula','name','email','telefono','id_charges','id_documenttypes','id_states','password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function products()
    {
        return $this->hasMany('App\Models\Products');
    }
    public function states()
    {
        return $this->belongsTo('App\Models\States');
    }
    public function charges()
    {
        return $this->belongsTo('App\Models\Charges');
    }
    public function documenttypes()
    {
        return $this->belongsTo('App\Models\Documenttypes');
    }
}
