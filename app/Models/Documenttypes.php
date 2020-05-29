<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documenttypes extends Model
{
    protected $table = 'documenttypes';
    protected $fillable = ['name'];
    protected $guarded = ['id'];

    public function users()
    {
    	return $this->hasMany('App\User');
    }
}
