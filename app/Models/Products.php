<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','codproduct','valor','id_states'];
    protected $guarded = ['id'];

    public function users()
    {
    	return $this->hasMany('App\User');
    }
    public function states()
    {
        return $this->belongsTo('App\Models\States');
    }
}
