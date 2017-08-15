@extends('layouts.adm')
@section('content')
<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <h3 class="page-title">Adms</h3><button type="button" role="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#addAdm"><i class="fa fa-plus"></i> Add Adm</button>
      <div class="row">
        <div class="col-md-12">
<div class="panel">
  <div class="panel-body">
    <table class="table">
      <thead>
        <tr>
          <th>Departamento</th>
          <th class="text-center">Ações</th>
        </tr>
      </thead>
      <tbody>
        @forelse($departments as $department)
        <tr>
          <td>{{$department->name}}</td>
          <td class="text-center"><button type="button" role="button" class="btn btn-primary btn-sm"><i class="lnr lnr-pencil"></i></button></td>
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
        <h4 class="modal-title" id="myModalLabel">Novo Departamento</h4>
      </div>
      <div class="modal-body">
        <form action="{{URL::to('Adm/Departamento/Add')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="name">
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
