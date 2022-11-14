<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function formations (){
        $formations = Formation::all();
        return view('pages.formation',compact('formations'));
    }
}
