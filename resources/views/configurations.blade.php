@extends('layouts.main')

@section('title','Configurações')

@section('content')
<div class="row">
  <!-- card-config-->
  <div class="card m-2">
    <div class="card-body">
      <h5 class="card-title"><i class="fas fa-address-card"></i>
        Setores</h5>
      <a href="{{url('department')}}" class="btn btn-primary">Gerenciar Setores</a>
    </div>
  </div>
  <!-- end card-config-->
    <!-- card-config-->
    <div class="card m-2">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-users"></i>
          Usuários</h5>
        <a href="#" class="btn btn-primary">Gerenciar Usuários</a>
      </div>
    </div>
    <!-- end card-config-->
  </div>

@endsection    
