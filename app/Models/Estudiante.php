<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    // //Relación uno a uno
    // public function codigo(){
    //     return this->hasone('\App\Models\Codigo','estudiante');
    // }
    
}

