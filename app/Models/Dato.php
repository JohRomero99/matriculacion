<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    use HasFactory;

    protected $guarded = [];

    //Relacion uno a uno
    public function user(){

        return $this->hasOne('App\Models\User');
    }

}

