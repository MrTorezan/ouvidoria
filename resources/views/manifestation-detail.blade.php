@extends('layouts.main')
<!--title-->
@section('title', 'Detalhe da Manifestação')
<!--end title-->

@section('content')
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
              @foreach ($origins as $origin)
            <option value="{{$origin->id}}" {{($manifestation->origin_id===$origin->id)? 'selected':''}}>{{$origin->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-3">
            <label for="date">Data da Manifestação</label>
            <input class="form-control" type="date" name="manifestation_date" id="manifestation_date">
          </div>
          </div>
          <div class="form-group">
            <input type="text" name="complainer" class="form-control" id="complainer" placeholder="Nome do Manifestante">
          </div>
          <div class="row">
            <div class="form-group col-6">
              <input type="text" name="complainer_phone" class="form-control" id="complainer_phone" placeholder="Telefone para Contato">
            </div>
            <div class="form-group col-6">
              <input type="mail" name="complainer_email" class="form-control" id="complainer_email" placeholder="E-Mail do Manifestante">
            </div> 
          </div>
          <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" id="" class="form-control" style="min-height: 150px"></textarea>
          </div>
          
    </form>
@endsection