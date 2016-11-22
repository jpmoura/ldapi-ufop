@extends('layout')

@section('title')
    Editar configurações da API
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
            <form class="form" accept-charset="utf-8" action="{{ url('/edit/settings') }}" method="post">
                <input type="hidden" name="id" value="{!! $settings->server !!}" />

                <div class="input-group">
                    <span class="input-group-addon input-api-settings">Servidor</span>
                    <input name="server" class="form-control" type="text" value="{!! $settings->server !!}" placeholder="Servidor" required />
                </div>

                <div class="input-group">
                    <span class="input-group-addon input-api-settings">Usuário leitor</span>
                    <input name="user" class="form-control" type="text" value="{!! $settings->user !!}" placeholder="Usuário leitor" required />
                </div>

                <div class="input-group">
                    <span class="input-group-addon input-api-settings">Senha do usuário leitor</span>
                    <input name="password" class="form-control" type="password" value="{!! $settings->pwd !!}" placeholder="Senha do usuário leitor" required />
                </div>

                <div class="input-group">
                    <span class="input-group-addon input-api-settings">Domínio base</span>
                    <input name="domain" class="form-control" type="text" value="{!! $settings->domain !!}" placeholder="Domínio base" required />
                </div>

                <div class="input-group">
                    <span class="input-group-addon input-api-settings">Campo ID do usuário</span>
                    <input name="userid" class="form-control" type="text" value="{!! $settings->user_id !!}" placeholder="Campo de ID de usuário" required />
                </div>

                <div class="input-group">
                    <span class="input-group-addon input-api-settings">Domínio do usuário</span>
                    <input name="structdomain" class="form-control" type="text" value="{!! $settings->struct_domain !!}" placeholder="Base domain for User Authentication" required />
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
