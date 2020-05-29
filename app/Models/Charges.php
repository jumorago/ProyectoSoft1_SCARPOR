<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Charges extends Model
{
    protected $table = 'charges';
    protected $fillable = ['name'];
    protected $guarded = ['id'];

    public function users()
    {
    	return $this->hasMany('App\User');
    }
}
