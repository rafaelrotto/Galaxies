<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalaxyRequest;
use App\Models\galaxy;
use Illuminate\Http\Request;

class GalaxyController extends Controller
{
    public function create(){
        return view('galaxy/create');
    }

    public function store(GalaxyRequest $request, $id){
        $data = $request->all();

        $data['user_id'] = $id;

        galaxy::query()->create($data);

        return redirect('galaxy/create')->with('msg', 'Galáxia criada com sucesso!');
    }
}
