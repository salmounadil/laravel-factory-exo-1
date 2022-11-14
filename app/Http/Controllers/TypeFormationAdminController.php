<?php

namespace App\Http\Controllers;

use App\Models\Typeformation;
use Illuminate\Http\Request;

class TypeFormationAdminController extends Controller
{
    public function typesformationsAdmin (){
        $typesformations = Typeformation::all();
        return view('admin.pages.typesformations.typeformation',compact('typesformations'));
    }
    public function show ($id){
        $show = Typeformation::find($id);
        return view('admin.pages.typesformations.show',compact('show'));
    }
    public function create (){
        return view('admin.pages.typesformations.create');
    }

    public function store (Request $request){
        $newFormation = new Typeformation();
        $newFormation->nom = $request->nom;
        $newFormation->save();
        return redirect()->route('typesformationsAdmin');
    }
    public function edit ($id){
        $edit = Typeformation::find($id);
        return view('admin.pages.typesformations.edit',compact('edit'));
    }
    
    public function update (Request $request,$id){
        $update = Typeformation::find($id);
        $update->nom = $request->nom;
        $update->save();
        return redirect()->route('typesformationsAdmin');
    }

    public function delete ($id){
        Typeformation::find($id)->delete();
        return redirect()->route('typesformationsAdmin');
    }
}
