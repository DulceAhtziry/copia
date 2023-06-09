<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{ 
    public function login(){
        if (Auth::check()) {
            return redirect()->route('inicio');
        }
        return view('login');
    }

    public function logear(Request $request){
        $credenciales = $request->only("name", "password");
        if (Auth::attempt($credenciales)) { 
            return redirect()->route('inicio');
        } else {
            //retorna el dato anterior
            return back()->withInput($credenciales);
        }
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('auth-login');
    }

    public function agregarNuevo(Request $request){
      
        $item = new User();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->usuario = $request->usuario;
        $item->password = Hash::make($request->password);
        $item->save();
        Alert::success('Agregado', 'Se agrego correctamente');
        return redirect()->route('auth-login');
       

    }
    public function registrarUsuario(){
        return view('registrarUsuario');
    }

}

