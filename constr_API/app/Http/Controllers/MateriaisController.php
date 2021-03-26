<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiais;

class MateriaisController extends Controller
{
    public function index(){
        
        $materiais = Materiais::get()->toJson();
        return $materiais;
    }

    public function store (Request $request) {

        $materiais = new Materiais;
        $materiais->fill($request->input());
        $materiais->save();
        return response("Material adicionado!",201);

    }

    public function show($id) {

        $materiais = Materiais::find($id)->toJson();
        return $materiais;

    }

    public function edit($id) {

        $materiais = Materiais::find($id)->toJson();
        return $materiais;

    }

    public function update($id) {

        $materiais = Materiais::find($id);
        $materiais->fill($request->input());
        $materiais->save();
        return response("Material atualizado!",200);
    }

    public function delete($id) {
        
        $materiais = Materiais::find($id);
        $materiais->delete();
        return response("Material deletado!");
    }
}
