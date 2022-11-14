<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentsAdminController extends Controller
{
    public function batimentsAdmin (){
        $batiments = Batiment::All();
        return view('admin.pages.batiments.batiments',compact('batiments'));
    }
    public function show ($id){
        $show = Batiment::find($id);
        return view('admin.pages.batiments.show',compact('show'));
    }
    public function create (){
        return view('admin.pages.batiments.create');
    }

    public function store (Request $request){
        $newBatiment = new Batiment();
        $newBatiment->nom = $request->nom;
        $newBatiment->description = $request->description;
        $newBatiment->save();
        return redirect()->route('batimentsAdmin');
    }

    public function edit ($id){
        $edit = Batiment::find($id);
        return view('admin.pages.batiments.edit',compact('edit'));
    }

    public function update (Request $request,$id){
        $update = Batiment::find($id);
        $update->nom = $request->nom;
        $update->description = $request->description;
        $update->save();
        return redirect()->route('batimentsAdmin');
    }
    public function delete ($id){
        Batiment::find($id)->delete();
        return redirect()->route('batimentsAdmin');
    }


}
