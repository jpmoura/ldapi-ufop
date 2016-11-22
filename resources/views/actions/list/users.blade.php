@extends('layout')

@section('title')
    Lista de usuários
@endsection

@section('breadcrumb')
    <li><a href="{{url('/list/users')}}"><i class="fa fa-users"></i> Usuários</a></li>
@endsection

@section('usersActive')
    class="active"
@endsection

@section('extrasHeadImports')
    <link rel="stylesheet" type="text/css" href="{{url ('public/plugins/datatables/dataTables.bootstrap.css')}}"/>
@endsection

@section('body')
    <div class="box box-primary-ufop">
        <div class="box-body">
            <div class="text-center">
                <table class="table table-responsive table-bordered table-hover table-stripped" id="users">
                    <thead>
                    <tr>
                        <th>Usuário</th>
                        <th>Descrição</th>
                        <th>Privilégio</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{!! $user->username !!}</td>
                            <td>{!! $user->description !!}</td>
                            <td>{!! $user->role !!}</td>
                            <td><a href="{{ url("/edit/user/" . base64_encode($user->username)) }}" class="btn btn-ufop btn-xs"><i class="fa fa-edit"></i> Editar</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Usuário</th>
                        <th>Descrição</th>
                        <th>Privilégio</th>
                        <th>Ação</th>
                    </tr>
                    </tfoot>
                </table>
            </div>

            <div class="text-center">
                <button class="btn btn-default" type="button" onclick="history.back()"><i class="fa fa-arrow-left"></i> Back</button>
                <a href="{{ url('/add/user') }}" class="btn btn-success"><i class="fa fa-plus"></i> Adiconar</a>
            </div>
        </div>
    </div>
@endsection


@section('extrasBottomBodyImports')
    <script type="text/javascript" src="{{url ('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url ('public/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#users').DataTable();
        } );
    </script>
@endsection