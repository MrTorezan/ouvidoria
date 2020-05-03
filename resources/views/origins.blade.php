@extends('layouts.main')

@section('title','Origens de Manifestação')

@section('content')
    <div class="d-flex m-3 justify-content-between">
  <h5>Origens de Manifestação</h5>
  <button class="btn btn-success" data-toggle="modal" data-target="#cadOrigins"><i class="fas fa-plus"> </i>Adicionar</button>
</div>

@if(!is_null($origins) && count($origins)>0)
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Origem</th>
        <th scope="col">Descrição</th>
        <th scope="col" class="text-center">Editar/Excluir</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($origins as $origin)
      <tr>
        <td>{{$origin->id}}</td>
        <td>{{$origin->name}}</td>
        <td>{{$origin->description}}</td>
          <td class="text-center">
            <button class="btn btn-sm btn-info m-sm-1" data-toggle="modal" data-target="#editOrigins" data-idorigin="{{$origin->id}}" data-name="{{$origin->name}}" data-description="{{$origin->description}}"><i class="fas fa-edit"></i>Editar</button>
          <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteOrigins" data-idorigin="{{$origin->id}}"><i class="fas fa-times"></i> Excluir</button>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
@else
  <h5>Não existem origens cadastradas.</h5>
@endif
{{--init modal insert--}}
<div class="modal fade" id="cadOrigins" tabindex="-1" role="dialog" aria-labelledby="cadOriginsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cadOriginsLabel">Nova Origem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="{{route('origin.store', 'id')}}" method="POST">
      @csrf
        <div class="modal-body">
          @include('layouts.form-origin')
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
<div class="modal fade" id="editOrigins" tabindex="-1" role="dialog" aria-labelledby="editOriginsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editOriginsLabel">Editar/Visualizar Origem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="{{route('origin.update', '1')}}" method="POST">
      @method('PUT')
      @csrf
        <div class="modal-body">
          <input type="hidden" name="idorigin" id="idorigin" value="">
          @include('layouts.form-origin')
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
<div class="modal fade" id="deleteOrigins" tabindex="-1" role="dialog" aria-labelledby="deleteOriginsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteOriginsLabel">Excluir Origem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="{{route('origin.destroy', '1')}}" method="POST">
      @method('DELETE')
      @csrf
        <div class="modal-body">
          <input type="hidden" name="idorigin" id="idorigin" value="">
          <h5>Deseja excluir esta Origem?</h5>
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