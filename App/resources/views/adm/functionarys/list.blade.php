@extends('layouts.adm')
@section('content')
<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <h3 class="page-title">Funcionários</h3><button type="button" role="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#addAdm"><i class="fa fa-plus"></i> Add Functionário</button>
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th class="text-center">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($functionarys as $functionary)
                  <tr>
                    <td>{{$functionary->name}}</td>
                    <td>{{$functionary->cpf}}</td>
                    <td class="text-center"><button type="button" role="button" class="btn btn-primary"><i class="lnr lnr-pencil"></i></button></td>
                  </tr>
                  @empty
                  <tr><td class="text-center">Nenhum registro cadastrado!</td></tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
          <!-- END BASIC TABLE -->
          <!-- Modal -->
          <div class="modal fade" id="addAdm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Novo Adm</h4>
                </div>
                <div class="modal-body">
                  <form action="{{URL::to('SAdm/Admin/Add')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="">Foto</label>
                      <input type="file" name="photo" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Nome</label>
                      <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>CPF</label>
                      <input type="tel" name="cpf" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Telefone</label>
                      <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Departamento</label>
                      <select name="department_id" class="form-control" required>
                        <option value="">Selecione um departamento</option>
                        @forelse($departments as $department)
                        <option value="{{$department->id}}">{{$department->name}}</option>
                        @empty
                        <option value="">Nenhum departamento cadastrado</option>
                        @endforelse
                      </select>
                    </div>
                    <div class="form-group">
                      <label>E-mail</label>
                      <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                      <label>Senha</label>
                      <input type="text" class="form-control" name="password">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
@endsection
