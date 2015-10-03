@extends('layout')

@section('titulo')
    <h2>
        <small><i class="fa fa-envelope"></i> Novo email</small>
    </h2>
@endsection

@section('content')
    <div class="col-md-6">
        <form action="{{ route('email.store') }}" method="post">
            <input type="hidden" name="pessoa_id" id="pessoa_id" value="{{ $pessoa->id }}">
            <h2>{{ $pessoa->nome }}({{ $pessoa->apelido }})</h2>
            <div class="form-group">
                <label for="nome">Descrição</label>
                <input type="text" name="descricao" class="form-control" id="nome" placeholder="Descrição"
                       value="{{ old('descricao') }}">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control col-md-3" id="email" placeholder="E-mail"
                       value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Salvar</button>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        @include('partials.errors')
    </div>
@endsection