@extends('layout')

@section('title')
    Editar Campo {!! $field->name !!}
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
            <form class="form" accept-charset="utf-8" action="{{ url('/edit/fields') }}" method="post">
                <input type="hidden" name="id" value="{!! $field->name !!}" />
                <div class="input-group input-api-field">
                    <span class="input-group-addon input-api-field">Nome</span>
                    <input name="name" class="form-control" type="text" placeholder="Nome do campo no Servidor AD" value="{!! $field->name !!}" required />
                </div>

                <div class="input-group">
                    <span class="input-group-addon input-api-field">Apelido</span>
                    <input name="alias" class="form-control" type="text" placeholder="Apelido na API" value="{!! $field->alias !!}" required />
                </div>

                <br>

                <div class="text-center">
                    <button class="btn btn-default" type="button" onclick="history.back()"><i class="fa fa-times"></i> Cancelar</button>
                    <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i> Apagar</button>
                    <button class="btn btn-warning" type="reset"><i class="fa fa-eraser"></i> Resetar</button>
                    <button class="btn btn-success" type="submit"><i class="fa fa-check"></i> Aplicar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal modal-danger fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-center">Apagar campo {!! $field->name !!}</h4>
                </div>
                <div class="modal-body text-center">
                    Você tem certeza?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
                    <form action="{{ url('delete/fields') }}" method="post">
                        <input type="hidden" name="id" value="{!! $field->name !!}" />
                        <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-trash"></i> Apagar</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
