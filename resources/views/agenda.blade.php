@extends('layout')

@section('titulo')
    <h2><small><i class="fa fa-list"></i> Lista de contatos</small></h2>
@endsection

@section('content')
    @foreach($pessoas as $pessoa)
        <div class="col-md-6">
            @include('partials.contato')
        </div>
    @endforeach
@endsection