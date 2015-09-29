<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            @if($pessoa->sexo == 'F')
                <i class="fa fa-female text-danger"></i>
            @else
                <i class="fa fa-male text-primary"></i>
            @endif

            {{ $pessoa->apelido }}
            <span class="pull-right">
                <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar">
                    <i class="fa fa-edit"></i>
                </a>
                <a href="{{ route('agenda.apagarcontato', ['id' => $pessoa->id]) }}" class="btn btn-danger btn-xs excluir" data-toggle="tooltip" data-placement="top" title="Apagar">
                    <i class="fa fa-minus-circle"></i>
                </a>
            </span>
        </h3>
    </div>
    <div class="panel-body">
        <h3>
            {{ $pessoa->nome  }}
        </h3>
        <table class="table table-hover">
            @if(count($pessoa->telefones) == 0)
                <div class="alert alert-warning"><i class="fa fa-warning"></i> Não há telefones.</div>
            @else
                @foreach($pessoa->telefones as $telefone)
                    <tr>
                        <td>{{ $telefone->descricao }}</td>
                        <td>{{ $telefone->numero }}</td>
                        <td><a href="{{ route('agenda.apagartelefone', ['id' => $telefone->id]) }}" class="text-danger excluir" data-toggle="tooltip" data-placement="top" title="Apagar telefone"><i class="fa fa-minus-circle"></i> </a></td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>
</div>