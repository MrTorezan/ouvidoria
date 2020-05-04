@extends('layouts.main')
<!--title-->
@section('title', 'Manifestações')
<!--end title-->

@section('content')

<div class="card">
    <div class="card-body">
        <div class="m-2 d-flex justify-content-between">
            <h5 class="card-title">Manifestações</h5>
            <button class="btn btn-success" data-toggle="modal" data-target="#cadManifestation"><i class="fas fa-plus"></i> Adicionar</button>
        </div>

        @if(!is_null($manifestations) && count($manifestations)>0)
        <table class="table .table-striped">
            <thead>
              <tr>
                <th scope="col">Data/Hora</th>
                <th scope="col">Manifestante</th>
                <th scope="col">Setor</th>
                <th scope="col">Gerência</th>
                <th class="text-center">Visualizar</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($manifestations as $manifestation)
              <tr>
                <th scope="row">{{date('d/m/Y',strtotime($manifestation->manifestation_date))}}</th>
                <td>{{$manifestation->complainer}}</td>
                <td>{{$manifestation->department->name}}</td>
                <td>{{$manifestation->department->manager}}</td>
                <td class="text-center"><a href="{{route('manifestation.edit', $manifestation->id)}}" class="btn btn-info">Detalhes <i class="fas fa-angle-double-right"></i></a> </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @else
            <h5>Não existem manifestações cadastradas.</h5>
          @endif
          
    </div>

<!-- Modal -->
<div class="modal fade" id="cadManifestation" tabindex="-1" role="dialog" aria-labelledby="cadManifestationLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cadManifestation">Nova Manifestação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('manifestation.store')}}" method="POST">
        @csrf
      <div class="modal-body">
        @include('layouts.form-manifestation')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </div>
    </form>
  </div>
</div>

@endsection
