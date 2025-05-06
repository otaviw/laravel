<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class keepinhoController extends Controller
{
    public function index(){
        $notas = Nota::all();
        return view('keepinho/index', ['notas' => $notas]);
    }

    public function gravar(Request $request){
        // cria uma nota com todos os valores enviados pelo formulário. Porém, a model vai ficar apenas com aqueles lostados no $fillable
        Nota::create($request->all());
        return redirect()->route('keep');
    }

    public function editar(Nota $nota, Request $request){
        if($request->isMethod('put')){
            $nota = Nota::find($request->id);
            $nota->texto = $request->texto;
            $nota->save();

            return redirect()->route('keep');
        }
        return view('keepinho.editar', ['nota'=> $nota]);
    }

}
