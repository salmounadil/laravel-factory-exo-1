<?php

namespace App\Http\Controllers;

use App\Models\Typeformation;
use Illuminate\Http\Request;

class TypeformationController extends Controller
{
    public function typeformations (){
        $typesformations = Typeformation::all();
        return view('pages.typeformation',compact('typesformations'));
    }
    
}
