<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    protected $table = 'tables';
    protected $fillable = ['name','id_states'];
    protected $guarded = ['id'];

    public function states()
    {
        return $this->belongsTo('App\Models\States');
    }
}

