<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CepController extends Controller
{
    public function index()
    {
        return view('cep.index');
    }

    public function consultar(Request $request)
    {
        
       // validação


       // requisição

        $dados = $resposta->json();

        return view('cep.index', ['endereco' => $dados]);
    }
}
