@extends('layout')

@section('titulo')
    <h2>
        <small><i class="fa fa-user"></i> Nova pessoa</small>
    </h2>
@endsection

@section('content')
    <div class="col-md-6">
        <form action="{{ route('pessoa.update', ['id' => $pessoa->id]) }}" method="post">
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo"
                       value="{{ $pessoa->nome }}">
            </div>
            <div class="form-group">
                <label for="apelido">Apelido</label>
                <input type="text" name="apelido" class="form-control" id="apelido" placeholder="Apelido"
                       value="{{ $pessoa->apelido }}">
            </div>
            <div class="checkbox">
                <label for="feminino">
                    <input type="radio" value="F" name="sexo" id="feminino" {{ ($pessoa->sexo == 'F') ? 'checked' : null }}> <i class="fa fa-female text-danger"></i>
                </label>
                <br>
                <label for="masculino">
                    <input type="radio" value="M" name="sexo" id="masculino" {{ ($pessoa->sexo == 'M') ? 'checked' : null }}> <i class="fa fa-male text-primary"></i>
                </label>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Salvar</button>
        </form>
    </div>
    <div class="col-md-6">
        @include('partials.errors')
        @include('partials.telefone')
    </div>
@endsection