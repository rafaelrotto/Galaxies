<?php

namespace App\Http\Controllers;

use App\Models\galaxy;
use Illuminate\Http\Request;

class SolarSystemController extends Controller
{
    public function create(){
        $galaxy = galaxy::latest()->get();

        $flag = 0;

        return view('solarsystem.create', ['galaxy' => $galaxy, 'flag' => $flag]);
    }
}
