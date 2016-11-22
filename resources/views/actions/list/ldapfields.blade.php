@extends('layout')

@section('title')
    Lista dos campos disponíveis para API
@endsection

@section("fieldsActive")
    class="active"
@endsection

@section('breadcrumb')
    <li><a href="{{url('/list/fields')}}"><i class="fa fa-th-list"></i> Campos</a></li>
@endsection

@section('extrasHeadImports')
    <link rel="stylesheet" type="text/css" href="{{url ('public/plugins/datatables/dataTables.bootstrap.css')}}"/>
@endsection

@section('body')
    <div class="box box-primary-ufop">
        <div class="box-body">
            <div class="text-center">
                <table class="table table-responsive table-bordered table-hover table-stripped" id="fields">
                    <thead>
                    <tr>
                        <th>Campo</th>
                        <th>Apelido</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($fields as $field)
                        <tr>
                            <td>{!! $field->name !!}</td>
                            <td>{!! $field->alias !!}</td>
                            <td><a href="{{ url("/edit/fields/" . base64_encode($field->name)) }}" class="btn btn-ufop btn-xs"><i class="fa fa-edit"></i> Editar</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Campo</th>
                        <th>Apelido</th>
                        <th>Ação</th>
                    </tr>
                    </tfoot>
                </table>
            </div>

            <div class="text-center">
                <button type="button" class="btn btn-default" onclick="history.back()"><i class="fa fa-arrow-left"></i> voltar</button>
                <a href="{{ url('/add/fields') }}" class="btn btn-success"><i class="fa fa-plus"></i> Adicionar</a>
            </div>
        </div>
    </div>
@endsection


@section('extrasBottomBodyImports')
    <script type="text/javascript" src="{{url ('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url ('public/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#fields').DataTable();
        } );
    </script>
@endsection