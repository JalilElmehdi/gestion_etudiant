<?php

namespace App\Http\Controllers;
use App\Models\Filiere;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class EtudiantsController extends Controller
{
    public function Etudiants(){
        $etudiants=Etudiant::all();
        return view('partials.ListeEtudiants',compact('etudiants'));
    }
    public function Filieres(){
        $filieres=Filiere::all();
        return view('partials.ListeFiliere',compact('filieres'));
    }
    public function Home(){
        return view('partials.home');
    }
    public function AjouterEtudiant(){

        return view('partials.AjouterEtudiant');
    }

    public function Login(){

        return view('partials.login');
    }

    public function ValiderAjouter(Request $request){
        
        $request['password']=Hash::make($request['password']);
        Etudiant::create($request->post());
        return redirect()->route('login');

    }
    public function ValiderLogin(Request $request){
        $request->validate([
            'email' => 'required|email|min:10',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('etudiants')->with('success', 'Tu as Fait Login Avec Succes!');
        } else {
            return redirect()->route('login')->withErrors(['errorlogin' => 'le mot de passe ou email Incorrect!']);
        }
    }
   
    public function Logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }

    public function DeleteE(Etudiant $etudiant){
        $etudiant->delete();
        return redirect()->back();
    }

    public function EditeE(Etudiant $etudiant){
        return view('partials.edite',compact('etudiant'));
    }

    public function UpdateE(Etudiant $etudiant,Request $request){
        $request['password']=Hash::make($request['password']);
        $etudiant->fill($request->all())->save();
                return redirect()->route('etudiants');
    }

}
