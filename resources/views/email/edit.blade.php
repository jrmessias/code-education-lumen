@extends('layout')

@section('titulo')
    <h2>
        <small><i class="fa fa-envelope"></i> Editando email</small>
    </h2>
@endsection

@section('content')
    <div class="col-md-6">
        <form action="{{ route('email.update',['id' => $email->id]) }}" method="post">
            <input type="hidden" name="id" id="id" value="{{ $email->id }}">
            <input type="hidden" name="_method" id="_method" value="put">
            <h2></h2>
            <div class="form-group">
                <label for="nome">Descrição</label>
                <input type="text" name="descricao" class="form-control" id="nome" placeholder="Descrição"
                       value="{{ $email->descricao }}">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control col-md-3" id="email" placeholder="E-mail"
                       value="{{ $email->email }}">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Salvar</button>
        </form>
    </div>
    <div class="col-md-6">
        @include('partials.errors')
    </div>
@endsection