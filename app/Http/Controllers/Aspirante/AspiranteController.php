<?php

namespace App\Http\Controllers\Aspirante;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AspiranteController extends Controller
{
    public function aspirante(){
        
        return view("aspirante.index");

    }
}
