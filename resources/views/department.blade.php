@extends('layouts.main')
<!--title-->
@section('title', 'Setores')
<!--end title-->

@section('content')
<div class="d-flex m-3 justify-content-between">
  <h5>Setores</h5>
  <button class="btn btn-success" data-toggle="modal" data-target="#cadSetores"><i class="fas fa-plus"> </i>Adicionar</button>
</div>

@if(!is_null($departments) && count($departments)>0)
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Setor</th>
        <th scope="col">Coordenador</th>
        <th scope="col">Gerente</th>
        <th scope="col" class="text-center">Editar/Excluir</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($departments as $dptm)
      <tr>
        <td>{{$dptm->id}}</td>
        <td>{{$dptm->name}}</td>
        <td>{{$dptm->responsible}}</td>
        <td>{{$dptm->manager}}</td>
          <td class="text-center">
            <button class="btn btn-sm btn-info m-sm-1" data-toggle="modal" data-target="#editSetores" data-idsetor="{{$dptm->id}}" data-name="{{$dptm->name}}" data-responsible="{{$dptm->responsible}}" data-responsible_m="{{$dptm->email_responsible}}" data-manager="{{$dptm->manager}}" data-manager_m="{{$dptm->email_manager}}"><i class="fas fa-edit"></i>Editar</button>
          <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteSetores" data-idsetor="{{$dptm->id}}"><i class="fas fa-times"></i> Excluir</button>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
@else
  <h5>Não existem setores cadastrados.</h5>
@endif
{{--init modal insert--}}
<div class="modal fade" id="cadSetores" tabindex="-1" role="dialog" aria-labelledby="cadSetoresLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cadSetoresLabel">Novo Setor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="{{route('department.store')}}" method="POST">
      @csrf
        <div class="modal-body">
          @include('layouts.form-department')
        </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
    </div>
  </div>
</div>
{{--end modal insert --}}

{{--init modal edit--}}
<div class="modal fade" id="editSetores" tabindex="-1" role="dialog" aria-labelledby="editSetoresLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editSetoresLabel">Editar/Visualizar Setor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="{{route('department.update', 'idsetor')}}" method="POST">
      @method('PUT')
      @csrf
        <div class="modal-body">
          <input type="hidden" name="idsetor" id="idsetor" value="">
          @include('layouts.form-department')
        </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      <button type="submit" class="btn btn-primary">Salvar Alterações</button>
      </div>
    </form>
    </div>
  </div>
</div>
{{--end modal edit --}}

{{--init modal delete--}}
<div class="modal fade" id="deleteSetores" tabindex="-1" role="dialog" aria-labelledby="deleteSetoresLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteSetoresLabel">Excluir Setor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="{{route('department.destroy', '1')}}" method="POST">
      @method('DELETE')
      @csrf
        <div class="modal-body">
          <input type="hidden" name="idsetor" id="idsetor" value="">
          <h5>Deseja excluir este setor?</h5>
        </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-success" data-dismiss="modal">NÃO! Cancele!</button>
      <button type="submit" class="btn btn-danger">SIM, pode excluir</button>
      </div>
    </form>
    </div>
  </div>
</div>
{{--end modal delete --}}

@endsection
