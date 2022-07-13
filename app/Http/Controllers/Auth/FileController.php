<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function imagen(Request $request){

        $request->validate([
            'file' => ['required', 'image', 'max:1048'],
        ]);

        $img = $request->file('file')->store('public/imageUsuarios');

        $img = Storage::url($img);

        $user = User::find(Auth::user()->id);
        $user->imagen = $img;
        $user->save();

        return back()->with('foto','Foto actualizada con éxito');

    }
}
