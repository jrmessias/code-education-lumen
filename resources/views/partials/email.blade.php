<table class="table table-hover">
    <tr>
        <td colspan="4">
            <a href="{{ route('telefone.create', ['id' => $pessoa->id]) }}" class="btn btn-info btn-xs" title="Adicionar email"><i class="fa fa-plus-circle"></i> Novo email</a>
        </td>
    </tr>
    @if(count($pessoa->emails) == 0)
        <tr>
            <td colspan="4">
                <div class="alert alert-warning"><i class="fa fa-warning"></i> Não há emails.</div>
            </td>
        </tr>
    @else
        @foreach($pessoa->emails as $email)
            <tr>
                <td>{{ $email->descricao }}</td>
                <td>{{ $email->email }}</td>
                <td><a href="{{ route('telefone.edit', ['id' => $email->id]) }}" class="text-primary" data-toggle="tooltip" data-placement="top" title="Editar telefone"><i class="fa fa-pencil"></i> </a></td>
                <td><a href="{{ route('telefone.delete', ['id' => $email->id]) }}" class="text-danger" data-toggle="tooltip" data-placement="top" title="Apagar telefone"><i class="fa fa-times-circle"></i> </a></td>
            </tr>
        @endforeach
    @endif
</table>