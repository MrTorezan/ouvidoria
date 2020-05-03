@extends('layouts.main')

@section('title','Configurações')

@section('content')
<div class="row">
  <!-- card-config-->
  <div class="card m-2">
    <div class="card-body">
      <h5 class="card-title"><i class="fas fa-address-card"></i>
        Setores</h5>
      <a href="{{route('department.index')}}" class="btn btn-primary">Gerenciar Setores</a>
    </div>
  </div>
  <!-- end card-config-->
  <!-- card-users-->
    <div class="card m-2">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-users"></i>
          Usuários</h5>
        <a href="#" class="btn btn-primary">Gerenciar Usuários</a>
      </div>
    </div>
    <!-- end card-users-->
    <!-- card-origins-->
    <div class="card m-2">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-envelope-open-text"></i>
          Origens</h5>
        <a href="{{route('origin.index')}}" class="btn btn-primary">Gerenciar Origens</a>
      </div>
    </div>
    <!-- end card-users-->
  </div>

@endsection    
