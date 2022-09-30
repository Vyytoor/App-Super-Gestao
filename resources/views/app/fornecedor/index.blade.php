<h3> Fornecedores </h3>

@php


@endphp


@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor )
      Interação Atual: {{$loop -> iteration}}
       <br>
        Fornecedor: {{ $fornecedor['nome'] }}
            </br>
            Status: {{ $fornecedor['status'] }}
            </br>
            CNPJ: {{$fornecedor['cnpj'] ?? 'Dado não foi preenchido'}}
            </br>
            TELEFONE: ({{$fornecedor['ddd'] ?? ''}}) {{$fornecedor['ddd'] ?? ''}}
            <br>
            @if ($loop ->first)
                Primeira interação com o Loop
            @endif
            @if ($loop ->last)
                ultima interação com o Loop
                    <br>
                Total de Registro: {{$loop ->count}}
            @endif

        <hr>
    @empty
        Não existem fornecedores cadastrados
    @endforelse

@endisset
