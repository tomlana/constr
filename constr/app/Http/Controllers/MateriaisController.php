<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiais;
use Carbon\Carbon;

class MateriaisController extends Controller
{
    public function index(){
        
        $materiais = Materiais::get();
        $data = [];
        foreach ($materiais as $key => $value) {
            $data[] = [
                $value->nome,
                $value->desc,
                $value->marca,
                $value->quant,
                Carbon::make($value->created_at)->format('d/m/Y H:i'),
            ];
        }
        return ['data' => $data];
    }

    public function store (Request $request) {

        $materiais = new Materiais;
        $materiais->fill($request->all());
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

    public function update(Request $request,$id) {

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
