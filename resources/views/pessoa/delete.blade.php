@extends('layout')

@section('titulo')
    <h2><small class="text-danger"><i class="fa fa-remove"></i> Apagar contato</small></h2>
@endsection

@section('content')
    <div class="col-md-6">
        @include('partials.contato')
    </div>
    <div class="col-md-6">
        <div class="alert alert-danger">
            <i class="fa fa-warning"></i> Deseja realmente apagar este contato?
        </div>
        <form action="{{ route('pessoa.destroy', ['id' => $pessoa->id]) }}" method="post">
            <input type="hidden" name="_method" value="delete">
            <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i> Apagar</button>
            <a href="{{ route('agenda.index') }}" class="btn btn-default"><i class="fa fa-chevron-circle-left"></i> Voltar</a>
        </form>
    </div>

@endsection