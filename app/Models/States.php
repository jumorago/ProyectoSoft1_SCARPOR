<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    protected $table = 'states';
    protected $fillable = ['name'];
    protected $guarded = ['id'];

    public function tables()
    {
        return $this->belongsTo('App\Models\Tables');
    }
    public function products()
    {
        return $this->belongsTo('App\Models\Products');
    }
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
