<?php

namespace App\Http\Controllers\Auth;
use App\Models\Dato;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActualizarController extends Controller
{
    public function vista(){

        $id = Auth::user()->id;

        $update = Dato::find($id);
        $user = User::find($id);

        return view('usuario.actualizar', compact('update','user'));

    }

    public function dato(){

        // $uptade = Dato::find($this->id)

    }

}
