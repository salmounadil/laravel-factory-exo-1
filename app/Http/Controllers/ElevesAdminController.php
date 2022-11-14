<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class ElevesAdminController extends Controller
{
    public function elevesAdmin (){
        $eleves = Eleve::all();
        return view('admin.pages.eleves.eleves',compact('eleves'));
    }
    public function show ($id){
        $show = Eleve::find($id);
        return view('admin.pages.eleves.show',compact('show'));
    }
    public function create (){
        return view('admin.pages.eleves.create');
    }
    public function store (Request $request){
        $newEleve = new Eleve();
        $newEleve->nom = $request->nom;
        $newEleve->age = $request->age;
        $newEleve->etat = $request->etat;
        $newEleve->prenom = $request->prenom;
        $newEleve->save();
        return redirect()->route('elevesAdmin');
    }
    public function edit ($id){
        $edit = Eleve::find($id);
        return view('admin.pages.eleves.edit',compact('edit'));
    }
    
    public function update (Request $request,$id){
        $update = Eleve::find($id);
        $update->nom = $request->nom;
        $update->prenom = $request->prenom;
        $update->age = $request->age;
        $update->etat = $request->etat;
        $update->save();
        return redirect()->route('elevesAdmin');
    }
    public function delete ($id){
        Eleve::find($id)->delete();
        return redirect()->route('elevesAdmin');
    }
}
