@extends('layouts.main')

@section('title','Configurações')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Setores</h5>
            <table class="table .table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Setor</th>
                    <th scope="col">Responsável</th>
                    <th scope="col">Gerência</th>
                    <th>Editar</th>
                    <th>Visualizar</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Pronto Socorro - Manhã</td>
                    <td>Eduardo</td>
                    <td>Laís</td>
                    <td><i class="fas fa-edit"></i></td>
                    <td><i class="fas fa-eye"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Pronto Socorro - Recepção</td>
                    <td>Patricia</td>
                    <td>Zanzarini</td>
                    <td><i class="fas fa-edit"></i></td>
                    <td><i class="fas fa-eye"></i></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
    <!-- fim Setores-->
  
    <div class="card">
      <div class="card-body">
          <h5 class="card-title">Setores</h5>
          <table class="table .table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Setor</th>
                  <th scope="col">Responsável</th>
                  <th scope="col">Gerência</th>
                  <th>Editar</th>
                  <th>Visualizar</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Pronto Socorro - Manhã</td>
                  <td>Eduardo</td>
                  <td>Laís</td>
                  <td><i class="fas fa-edit"></i></td>
                  <td><i class="fas fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Pronto Socorro - Recepção</td>
                  <td>Patricia</td>
                  <td>Zanzarini</td>
                  <td><i class="fas fa-edit"></i></td>
                  <td><i class="fas fa-eye"></i></td>
                </tr>
              </tbody>
            </table>
      </div>
  </div>
@endsection    
