<div class="panel @if($pessoa->sexo == 'F') panel-danger @else panel-info @endif">
    <div class="panel-heading">
        <h3 class="panel-title">
            @if($pessoa->sexo == 'F')
                <i class="fa fa-female text-danger"></i>
            @else
                <i class="fa fa-male text-primary"></i>
            @endif
            {{ $pessoa->apelido }}
            <span class="pull-right">
                <a href="{{ route('pessoa.edit', ['id' => $pessoa->id]) }}" class="btn btn-primary btn-xs"
                   data-toggle="tooltip" data-placement="top" title="Editar">
                    <i class="fa fa-pencil"></i>
                </a>
                <a href="{{ route('pessoa.delete', ['id' => $pessoa->id]) }}" class="btn btn-danger btn-xs excluir"
                   data-toggle="tooltip" data-placement="top" title="Apagar">
                    <i class="fa fa-times-circle"></i>
                </a>
            </span>
        </h3>
    </div>
    <div class="panel-body">
        <h3>
            {{ $pessoa->nome  }}
        </h3>
        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#telefone{{$pessoa->id}}" aria-controls="telefone" role="tab" data-toggle="tab">
                        <i class="fa fa-phone"></i> Telefones
                    </a>
                </li>
                <li role="presentation">
                    <a href="#email{{$pessoa->id}}" aria-controls="email" role="tab" data-toggle="tab">
                        <i class="fa fa-envelope"></i> E-mails
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="telefone{{$pessoa->id}}">
                    @include('partials.telefone')
                </div>
                <div role="tabpanel" class="tab-pane" id="email{{$pessoa->id}}">
                    @include('partials.email')
                </div>
            </div>
        </div>
    </div>
</div>