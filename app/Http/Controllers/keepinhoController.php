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
        dd($request->all());
    }
}
