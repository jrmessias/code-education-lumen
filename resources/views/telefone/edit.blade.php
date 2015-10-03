@extends('layout')

@section('titulo')
    <h2>
        <small><i class="fa fa-phone"></i> Editando telefone</small>
    </h2>
@endsection

@section('content')
    <div class="col-md-6">
        <form action="{{ route('telefone.update',['id' => $telefone->id]) }}" method="post">
            <input type="hidden" name="id" id="id" value="{{ $telefone->id }}">
            <input type="hidden" name="_method" id="_method" value="put">
            <h2></h2>
            <div class="form-group">
                <label for="nome">Descrição</label>
                <input type="text" name="descricao" class="form-control" id="nome" placeholder="Descrição"
                       value="{{ $telefone->descricao }}">
            </div>
            <div class="form-group telefone">
                <label for="apelido">Telefone</label>
                <input type="text" name="codpais" class="form-control col-md-3" id="codpais" placeholder="Cód. País"
                       value="{{ $telefone->codpais }}">
                <input type="text" name="ddd" class="form-control col-md-3" id="ddd" placeholder="DDD"
                       value="{{ $telefone->ddd }}">
                <input type="text" name="prefixo" class="form-control col-md-3" id="prefixo" placeholder="Prefixo"
                       value="{{ $telefone->prefixo }}">
                <input type="text" name="sufixo" class="form-control col-md-3" id="sufixo" placeholder="Sufixo"
                       value="{{ $telefone->sufixo }}">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Salvar</button>
        </form>
    </div>
    <div class="col-md-6">
        @include('partials.errors')
    </div>
@endsection