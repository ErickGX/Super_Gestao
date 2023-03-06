
<h1>Fornecedor</h1>




@isset($fornecedores)
        Fornecedor : {{ $fornecedores[1]['nome']}}
        <br>
        Status : {{ $fornecedores[1]['cnpj'] }}
        <br>
    @isset($fornecedores[1]['status'])
     Cpnj : {{$fornecedores[1]['status']}}
         @empty($fornecedores[1]['status'])
           -- Vazio
         @endempty
    @endisset    
@endisset


{{-- @if ($fornecedores[0]['status'] == 'S')
   Fornecedor Ativo 
@endif

@unless ($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo   
@endunless  --}}


{{-- @if(count($fornecedores)> 0 && count($fornecedores) <10 )
    <h3>Existem alguns fornecedores cadastrados</h3>     
@elseif(count($fornecedores) > 10  )
    <h3>Existem  varios fornecedores cadastrados</h3>
@else
    <h3>Ainda nao existem fornecedores cadastrados</h3>
@endif    
 --}}



