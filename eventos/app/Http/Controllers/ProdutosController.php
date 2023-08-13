<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        
    $busca = request('busca');

    return view('produtos', ['busca' => $busca]);
    }

    public function produto($id = null){
        return view('produto', ['id' => $id]);
    }
}
