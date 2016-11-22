@extends('layout')

@section('title')
    Adicionar novo campo
@endsection

@section('breadcrumb')
    <li><a href="{{url('/list/fields')}}"><i class="fa fa-th-list"></i> Campos</a></li>
@endsection

@section('fieldsActive')
    class="active"
@endsection

@section('body')
    <div class="box box-primary-ufop">
        <div class="panel-body">
            <form class="form" accept-charset="utf-8" action="{{ url('/add/fields') }}" method="post">

                <div class="input-group">
                    <span class="input-group-addon input-api-field">Nome</span>
                    <input name="name" class="form-control" type="text" placeholder="Nome do campo" required />
                </div>

                <div class="input-group">
                    <span class="input-group-addon input-api-field">Apelido</span>
                    <input name="alias" class="form-control" type="text" placeholder="Apelido do campo" required />
                </div>

                <br>

                <div class="text-center">
                    <button class="btn btn-default" type="button" onclick="history.back()"><i class="fa fa-times"></i> Cancelar</button>
                    <button class="btn btn-warning" type="reset"><i class="fa fa-eraser"></i> Resetar</button>
                    <button class="btn btn-success" type="submit"><i class="fa fa-check"></i> Aplicar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
