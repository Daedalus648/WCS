<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crew;

class ActionController extends Controller
{
    public function addCrew(Request $request) {
        $crew = new Crew;
        $crew->name = $request->name;
        if (strlen($request->name) > 30){
            echo "Erreur";
        }else {
            $crew->save();
            return redirect('/');
        }
    }

}