@extends('layouts.main')
<!--title-->
@section('title', 'Setores')
<!--end title-->

@section('content')
    

<table class="table">
    <div class="d-flex m-3 justify-content-between">
        <h5>Setores</h5>
        <button class="btn btn-success"><i class="fas fa-plus"> </i>Adicionar</button>
    </div>
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

    </tbody>
</table>
@endsection