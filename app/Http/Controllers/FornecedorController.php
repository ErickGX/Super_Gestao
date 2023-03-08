<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0=>['nome' =>'Fornecedor 1', 'status' =>'Ativo', 'cnpj' => '111.111.0001/00', 'ddd' => '11', 'telefone' => '0000-0000'],
            1=>['nome' =>'Fornecedor 2', 'status' => 'Ativo', 'cnpj' => '000.000.0000/01', 'ddd' => '21', 'telefone' => '1111-1111'],
            2=>['nome' =>'Fornecedor 3', 'status' => 'Não ativo', 'cnpj' => '111.222.1234/03', 'ddd' => '85', 'telefone' => '2222-2222']

    ];

       


       //echo  isset($fornecedores[1]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
