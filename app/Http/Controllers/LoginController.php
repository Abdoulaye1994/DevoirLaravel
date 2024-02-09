<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\ConnecteRequest;
use App\Http\Requests\EnregistreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loguein(){
        return view('Compte.login');
    }

    public function login(ConnecteRequest $loginRequest){
        $acces = $loginRequest->only('email', 'password');

        if(Auth::attempt($acces)){
         return redirect()->route('Accueil');
        }

        return back()->withErrors(['LoginError' => "Email ou mot de password incorrect."]);
     }


     public function enregister(EnregistreRequest $enregisterRequest){
            User::create([
             'name' => $enregisterRequest->name,
             'prenom' => $enregisterRequest->prenom,
             'email' => $enregisterRequest->email,
             'password' => Hash::make($enregisterRequest->password),
             'avatar' => $enregisterRequest->avatar,
            ]);

            return view('Compte.login');
     }


    public function register(){
        return view('Compte.register');
    }


    
}
