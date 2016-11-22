@extends('layout')

@section('title')
    Adicionar Usuário
@endsection

@section('breadcrumb')
    <li><a href="{{url('/list/users')}}"><i class="fa fa-users"></i> Usuários</a></li>
@endsection

@section('usersActive')
    class="active"
@endsection

@section('body')
    <div class="box box-primary-ufop">
        <div class="box-body">
            <form class="form" accept-charset="utf-8" action="{{ url('/add/user') }}" method="post">

                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input name="username" class="form-control" type="text" placeholder="Usuário" required />
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input name="password" class="form-control" type="password" placeholder="Senha" required />
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input name="description" class="form-control" type="text" placeholder="Descrição do usuário" required />
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-puzzle-piece"></i></span>
                    <select name="role" class="form-control" required>
                        <option value="">Selecione uma opção</option>
                        <option value="user">Usuário normal</option>
                        <option value="admin">Administrador</option>
                    </select>
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
