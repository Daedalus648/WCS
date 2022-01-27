<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crew;

class ActionController extends Controller
{
    public function addCrew(Request $request) {
        $crew = new Crew;
        $crew->name = $request->name;
        $crew->save();
        return redirect('/');
    }

}