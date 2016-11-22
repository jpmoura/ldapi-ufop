@extends('layout')

@section('title')
    Configurações da API
@endsection

@section('breadcrumb')
    <li><a href="{{url('/list/settings')}}"><i class="fa fa-cogs"></i> Configurações</a></li>
@endsection

@section('settingsActive')
    class="active"
@endsection

@section('body')
    <div class="box box-primary-ufop">
        <div class="box-body">
            <div class="text-center">
                <table class="table table-responsive table-bordered table-hover table-stripped">
                    <thead>
                    <tr>
                        <th>Servidor</th>
                        <th>Usuário</th>
                        <th>Domínio</th>
                        <th>Senha</th>
                        <th>Campo de ID de usuário</th>
                        <th>Domínio de usuário</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{!! $settings->server !!}</td>
                            <td>{!! $settings->user !!}</td>
                            <td>{!! $settings->domain !!}</td>
                            <td>Encriptada</td>
                            <td>{!! $settings->user_id !!}</td>
                            <td>{!! $settings->struct_domain !!}</td>
                            <td><a href="{{ url("/edit/settings/" . base64_encode($settings->server)) }}" class="btn btn-ufop btn-xs"><i class="fa fa-edit"></i> Editar</a></td>
                        </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Servidor</th>
                        <th>Usuário</th>
                        <th>Domínio</th>
                        <th>Senha</th>
                        <th>Campo de ID de usuário</th>
                        <th>Domínio de usuário</th>
                        <th>Ação</th>
                    </tr>
                    </tfoot>
                </table>

                <div class="text-center">
                    <button class="btn btn-default" type="button" onclick="history.back()"><i class="fa fa-arrow-left"></i> Voltar</button>
                </div>
            </div>
        </div>
    </div>
@endsection