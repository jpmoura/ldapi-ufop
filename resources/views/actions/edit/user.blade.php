@extends('layout')

@section('title')
    Editar Usuário {!! $user->username !!}
@endsection

@section('breadcrumb')
    <li><a href="{{url('/list/users')}}"><i class="fa fa-users"></i> Usuários</a></li>
@endsection

@section('usersActive')
    class="active"
@endsection

@section('body')
    <div class="box box-primary-ufop">
    	  <div class="panel-body">
              <form class="form" accept-charset="utf-8" action="{{ url('/edit/user') }}" method="post">
                  <input type="hidden" name="id" value="{!! $user->username !!}" />

                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input name="username" class="form-control" type="text" value="{!! $user->username !!}" placeholder="Usuário" required/>
                  </div>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <input name="password" class="form-control" type="password" placeholder="Nova senha. Preencha somente em caso de mudança" />
                  </div>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                      <input name="description" class="form-control" type="text" value="{!! $user->description !!}" placeholder="Descrição do usuário" required/>
                  </div>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-puzzle-piece"></i></span>
                      <select name="role" class="form-control" required>
                          <option value="admin" @if($user->role == "admin") selected @endif>Administrador</option>
                          <option value="user" @if($user->role == "user") selected @endif>Usuário normal</option>
                      </select>
                  </div>

                  <br>

                  <div class="text-center">
                      <button class="btn btn-default" type="button" onclick="history.back()"><i class="fa fa-times"></i> Cancelar</button>
                      <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i> Apagar</button>
                      <button class="btn btn-warning" type="reset"><i class="fa fa-eraser"></i> Resetar</button>
                      <button class="btn btn-success" type="submit"><i class="fa fa-check"></i> Aplicar</button>
                  </div>

                  <br>
              </form>
    	  </div>
    </div>

    <div class="modal modal-danger fade" id="deleteModal">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    				<h4 class="modal-title text-center">Apagar usuário {!! $user->username !!}</h4>
    			</div>
                <div class="modal-body text-center">
                    Você tem certeza? Essa ação não pode ser desfeita.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
                    <form action="{{ url('delete/user') }}" method="post">
                        <input type="hidden" name="id" value="{!! $user->username !!}" />
                        <button type="submit" class="btn bg-black pull-right"><i class="fa fa-trash"></i> Apagar</button>
                    </form>
                </div>
    		</div><!-- /.modal-content -->
    	</div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
