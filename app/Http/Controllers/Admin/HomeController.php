<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){

        // $usuario = User::paginate(7);

        // return view('admin.index',compact('usuario'));

        return view('admin.index');
    }

    public function update($id){

        $user = User::find($id);

        // return view('admin.index',compact('user'));

    }

    public function inicio(){

        return view('user.inicio');

    }
}
