<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function eleves (){
        $eleves = Eleve::all();
        return view('pages.eleves',compact('eleves'));
    }
}
