@extends('layouts.main')
<!--title-->
@section('title', 'Dashboard')
<!--end title-->

<!-- section content-->
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Manifestações</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-white stretched-link" href="{{url('manifestation')}}">Detalhes</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Índices</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">Detalhes</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- end section content-->