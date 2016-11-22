@extends('layout')

@section('title')
    Painel de controle
@endsection

@section('homeActive')
    class="active"
@endsection

@section('body')
    <div class="text-center">
        <h3>Selecione uma opção</h3>
        <a class="btn btn-default link-ufop" href="{{ url('/list/settings') }}"><i class="fa fa-3x fa-cogs"></i> <br> Configurações</a>
        <a class="btn btn-default link-ufop" href="{{ url('/list/fields') }}"><i class="fa fa-3x fa-th-list"></i> <br> Campos</a>
        <a class="btn btn-default link-ufop" href="{{ url('/list/users') }}"><i class="fa fa-3x fa-users"></i> <br> Usuários</a>
    </div>
@endsection