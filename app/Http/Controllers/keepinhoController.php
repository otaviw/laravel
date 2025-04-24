<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class keepinhoController extends Controller
{
    public function index(){
        return view('keepinho/index');
    }
}
