<?php

namespace App\Http\Controllers;
use App\Models\Crew;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home()
    {
        $crew = Crew::all();
        return view('index', ['crew' => $crew]);
    }
}