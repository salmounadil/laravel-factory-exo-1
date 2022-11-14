<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationsAdminController extends Controller
{
    public function formationsAdmin (){
        $formations = Formation::all();
        return view('admin.pages.formations.formations',compact('formations'));
    }
    public function show ($id){
        $show = Formation::find($id);
        return view('admin.pages.formations.show',compact('show'));
    }
    public function create (){
        return view('admin.pages.formations.create');
    }
    public function store (Request $request){
        $newFormation = new Formation();
        $newFormation->nom = $request->nom;
        $newFormation->description = $request->description;
        $newFormation->save();
        return redirect()->route('formationsAdmin');
    }
    public function edit ($id){
        $edit = Formation::find($id);
        return view('admin.pages.formations.edit',compact('edit'));
    }
    
    public function update (Request $request,$id){
        $update = Formation::find($id);
        $update->nom = $request->nom;
        $update->description = $request->description;
        $update->save();
        return redirect()->route('formationsAdmin');
    }
    public function delete ($id){
        Formation::find($id)->delete();
        return redirect()->route('formationsAdmin');
    }
}
