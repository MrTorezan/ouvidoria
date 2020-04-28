@extends('layouts.main')
<!--title-->
@section('title', 'Manifestações')
<!--end title-->

@section('content')
<div class="card">
    <div class="card-body">
        <div class="m-2 d-flex justify-content-between">
            <h5 class="card-title">Manifestações</h5>
            <button class="btn btn-success"><i class="fas fa-plus"></i> Adicionar</button>
        </div>
        <table class="table .table-bordered">
            <thead>
              <tr>
                <th scope="col">Data/Hora</th>
                <th scope="col">Manifestante</th>
                <th scope="col">Setor</th>
                <th scope="col">Gerência</th>
                <th>Editar</th>
                <th>Visualizar</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">01/01/2020 8:00</th>
                <td>João da Silva</td>
                <td>Pronto Socorro</td>
                <td>Laís</td>
                <td><i class="fas fa-edit text-primary"></i></td>
                <td><i class="fas fa-eye text-success"></i></td>
              </tr>
              <tr>
                <th scope="row">01/01/2020 8:00</th>
                <td>João da Silva</td>
                <td>Pronto Socorro</td>
                <td>Laís</td>
                <td><i class="fas fa-edit text-primary"></i></td>
                <td><i class="fas fa-eye text-success"></i></td>
              </tr>
              <tr>
                <th scope="row">01/01/2020 8:00</th>
                <td>João da Silva</td>
                <td>Pronto Socorro</td>
                <td>Laís</td>
                <td><i class="fas fa-edit text-primary"></i></td>
                <td><i class="fas fa-eye text-success"></i></td>
              </tr>
              <tr>
                <th scope="row">01/01/2020 8:00</th>
                <td>João da Silva</td>
                <td>Pronto Socorro</td>
                <td>Laís</td>
                <td><i class="fas fa-edit text-primary"></i></td>
                <td><i class="fas fa-eye text-success"></i></td>
              </tr>
              <tr>
                <th scope="row">01/01/2020 8:00</th>
                <td>João da Silva</td>
                <td>Pronto Socorro</td>
                <td>Laís</td>
                <td><i class="fas fa-edit text-primary"></i></td>
                <td><i class="fas fa-eye text-success"></i></td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection
