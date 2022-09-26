<h3> Fornecedores </h3>


Fornecedor: {{ $fornecedores[0]['nome'] }}
</br>
Status: {{ $fornecedores[0]['status'] }}
</br>

@if (!($fornecedores[0]['status'] == 'S'))
    Fornecedor Inativo
@endif


<br>

@unless($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless