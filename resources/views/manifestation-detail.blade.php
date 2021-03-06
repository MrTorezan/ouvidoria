@extends('layouts.main')
<!--title-->
@section('title', 'Detalhe da Manifestação')
<!--end title-->

@section('content')
  <div class="mb-5">
    <form action="">
        <div class="row">
            <div class="form-group col-3">
            <label for="type_id">Tipo de Manifestação</label>
            <select name="type_id" id="type_id" class="form-control">
              @foreach ($types as $type)
            <option value="{{$type->id}}" {{($manifestation->type_id===$type->id)? 'selected':''}}>{{$type->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-3">
            <label for="id_department">Setor</label>
            <select name="id_department" id="id_department" class="form-control">
              @foreach ($departments as $department)
            <option value="{{$department->id}}" {{($manifestation->department_id===$department->id)? 'selected':''}}>{{$department->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-3">
            <label for="name">Origem</label>
            <select name="origin" id="origin" class="form-control">
              @foreach ($followups as $origin)
            <option value="{{$origin->id}}" {{($manifestation->origin_id===$origin->id)? 'selected':''}}>{{$origin->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-3">
            <label for="date">Data da Manifestação</label>
          <input class="form-control" type="date" name="manifestation_date" value="{{$manifestation->manifestation_date}}" id="manifestation_date">
          </div>
          </div>
          <div class="form-group">
          <input type="text" name="complainer" class="form-control" id="complainer" value="{{$manifestation->complainer}}" placeholder="Nome do Manifestante">
          </div>
          <div class="row">
            <div class="form-group col-6">
            <input type="text" name="complainer_phone" class="form-control" id="complainer_phone" value="{{$manifestation->complainer_phone}}" placeholder="Telefone para Contato">
            </div>
            <div class="form-group col-6">
            <input type="mail" name="complainer_email" class="form-control" id="complainer_email" value="{{$manifestation->complainer_email}}" placeholder="E-Mail do Manifestante">
            </div> 
          </div>
          <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" id="" class="form-control" style="min-height: 150px">{{$manifestation->description}}</textarea>
          </div>
          <div class="text-right"><button class="btn btn-success">Atualizar</button></div>
    </form>
    <hr>
    <div class="d-flex justify-content-between mb-5">
      <h5>Acompanhamentos</h5>
      <button class="btn btn-success" data-toggle="modal" data-target="#followup">
        <i class="fas fa-plus"></i> Novo Acompanhamento
      </button>
    </div>
    @if (!is_null($followups) && count($followups)>0)
      @foreach ($followups as $followup)
        <div class="card bg-light mb-3">
          <div class="card-header d-flex justify-content-between">
          <div>Data: {{date('d/m/Y',strtotime($followup->created_at))}}</div>
          <div>{{$followup->user_id}}</div>
        </div>
        <div class="card-body">
          <p class="card-text">{{$followup->description}}</p>
        </div>
        <div class="card-footer text-right">
          <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteFollowUps" data-idfollowup="{{$followup->id}}">Excluir</button>
        </div>
        </div>
      @endforeach
      @else
      <h5>Não existem acompanhamentos para esta manifestação.</h5>
    @endif
  </div>

<!-- Modal -->
<div class="modal fade" id="followup" tabindex="-1" role="dialog" aria-labelledby="followupLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="followup">Novo Acompanhamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="{{route('followup.store')}}" method="POST">
        @method('POST')
        @csrf
      <div class="modal-body">
        @include('layouts.form-manifestation-followup')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </form>
</div>

{{--init modal delete--}}
<div class="modal fade" id="deleteFollowUps" tabindex="-1" role="dialog" aria-labelledby="deleteFollowUpsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteFollowUpsLabel">Excluir Acompanhamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="{{route('followup.destroy', '1')}}" method="POST">
      @method('DELETE')
      @csrf
        <div class="modal-body">
          <input type="hidden" name="idfollowup" id="idfollowup" value="">
          <h5>Deseja excluir este Acompanhamento?</h5>
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

