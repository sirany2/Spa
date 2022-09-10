<?php

namespace App\Http\Controllers;
use App\Models\Voiture;

use Illuminate\Http\Request;


class VoitureController extends Controller
{
  public  function  index() {
        $titre= "index";
         $voiture= Voiture::where('couleur', '!=', 'noir ')->count();
        // dd($voiture);
        return view('index', compact('titre', "voiture"));

}
public  function  service() {
    $titre= "service";
    return view('service', compact('titre'));

}
public  function  contact() {
    $titre= "contact";
    // $voiture= voiture::where('nom','sira')->get();

    return view('contact', compact('titre'));

}
public  function   propos() {
    $titre= "a-propos";
    return view('a-propos', compact('titre'));

}
public  function nav() {
    $titre= "nav";
    return view('nav', compact('titre'));

}
public  function prix() {
    $titre= "prix";
    return view('prix', compact('titre'));

}
public function envoie(Request $request){
dd($request->email.'   '.$request->name.'   '.$request->message);

}

 }
