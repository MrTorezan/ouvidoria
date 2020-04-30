@extends('layouts.main')
<!--title-->
@section('title', 'Setores')
<!--end title-->

@section('content')

<div class="d-flex m-3 justify-content-between">
  <h5>Setores</h5>
  <button class="btn btn-success" data-toggle="modal" data-target="#cadSetores"><i class="fas fa-plus"> </i>Adicionar</button>
</div>

@if($departments)
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Setor</th>
        <th scope="col">Coordenador</th>
        <th scope="col">Gerente</th>
        <th scope="col">Visualizar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($departments as $dptm)
      <tr>
        <td>{{$dptm->id}}</td>
        <td>{{$dptm->name}}</td>
        <td>{{$dptm->responsible}}</td>
        <td>{{$dptm->manager}}</td>
        <td>View</td>
      </tr>
      @endforeach
    </tbody>
</table>
@else
  <p>Não existem setores cadastrados.</p>
@endif
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="cadSetores" tabindex="-1" role="dialog" aria-labelledby="cadSetoresLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cadSetoresLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="{{route('department.store')}}" method="POST">
      @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="setor">Nome do Setor</label>
            <input type="text" name="department" class="form-control">
          </div>
          <div class="form-group">
            <label for="setor">Responsável pelo Setor</label>
            <input type="text" name="responsible" class="form-control">
          </div>
          <div class="form-group">
            <label for="setor">E-mail do Responsável</label>
            <input type="text" name="email_responsible" class="form-control">
          </div>
          <div class="form-group">
            <label for="setor">Gerente</label>
            <input type="text" name="manager" class="form-control">
          </div>
          <div class="form-group">
            <label for="setor">E-mail do (a) Gerente</label>
            <input type="text" name="email_manager" class="form-control">
          </div>
        </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection
