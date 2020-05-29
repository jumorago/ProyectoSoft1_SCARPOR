<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statess extends Model
{
    protected $table = 'statess';
    protected $fillable = ['name'];
    protected $guarded = ['id'];
    
}
