<h1>Fornecedor</h1>

@isset($fornecedores)

        @forelse ($fornecedores as $indice => $fornecedor)

                Fornecedor : {{ $fornecedor['nome']}}
                <br>
                Status : {{$fornecedor['status'] ?? 'Dado não foi preenchido'}} 
                <br>
                cnpj : {{ $fornecedor['cnpj'] }}
                <br>
                Telefone : ({{ $fornecedor['ddd'] ?? 'Dado não foi preenchido' }}) 
                            ({{ $fornecedor['telefone']?? 'Dado não foi preenchido' }})
                <hr>

           @empty
            Não existe fornecedor cadastrado!!!     
        @endforelse

@endisset





