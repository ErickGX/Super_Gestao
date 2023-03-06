<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0=>['nome' =>'Fornecedor 1', 'status' =>'Ativo', 'cnpj' => ''],
            1=>['nome' =>'Fornecedor 2', 'status' => 'Nao ativo', 'cnpj' => '000.000.0000/01']
    ];


       echo  isset($fornecedores[1]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
