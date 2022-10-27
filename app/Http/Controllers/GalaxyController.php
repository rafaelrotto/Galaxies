<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalaxyRequest;
use App\Models\galaxy;
use Illuminate\Http\Request;

class GalaxyController extends Controller
{
    public function create(){

        $flag = 0;
        return view('galaxy.create', ['flag' => $flag]);
    }

    public function store(GalaxyRequest $request, $id){
        $data = $request->all();

        $data['user_id'] = $id;

        galaxy::query()->create($data);

        $flag = 1;

        return view('galaxy.create', ['flag' => $flag])->with('msg', 'Galáxia criada com sucesso!');
    }
}
