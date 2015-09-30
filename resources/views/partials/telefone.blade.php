<table class="table table-hover">
    <tr>
        <td colspan="4">
            <a href="{{ route('agenda.index', ['id' => $pessoa->id]) }}" class="btn btn-info btn-xs" title="Adicionar telefone"><i class="fa fa-plus-circle"></i> Novo telefone</a>
        </td>
    </tr>
    @if(count($pessoa->telefones) == 0)
        <tr>
            <td colspan="4">
                <div class="alert alert-warning"><i class="fa fa-warning"></i> Não há telefones.</div>
            </td>
        </tr>
    @else
        @foreach($pessoa->telefones as $telefone)
            <tr>
                <td>{{ $telefone->descricao }}</td>
                <td>{{ $telefone->numero }}</td>
                <td><a href="{{ route('telefone.edit', ['id' => $telefone->id]) }}" class="text-primary" data-toggle="tooltip" data-placement="top" title="Editar telefone"><i class="fa fa-pencil"></i> </a></td>
                <td><a href="{{ route('telefone.delete', ['id' => $telefone->id]) }}" class="text-danger" data-toggle="tooltip" data-placement="top" title="Apagar telefone"><i class="fa fa-times-circle"></i> </a></td>
            </tr>
        @endforeach
    @endif
</table>