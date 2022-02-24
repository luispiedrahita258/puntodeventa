@extends('layouts.admin')
@section('title','Editar Cliente')
@section('styles')
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Edición de Cliente
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" href="{{route('clients.index')}}" aria-current="page">Clientes</li>
                <li class="breadcrumb-item active" aria-current="page">Edición de Cliente</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edición de Cliente</h4>
                    </div>
                    {!! Form::model($client,['route'=>['clients.update',$client], 'method'=>'PUT', 'files'=>true]) !!}

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" value="{{$client->name}}" class="form-control" placeholder="Nombre"
                            aria-describedby="helpId" >
                    </div>
                    <div class="form-group">
                        <label for="dni">Numero de Documento</label>
                        <input type="number" name="dni" id="dni" value="{{$client->dni}}" class="form-control" placeholder="Numero de Documento"
                            aria-describedby="helpId" required>
                    </div>
                    <div class="form-group">
                        <label for="ruc">Numero de Documento (RUC)</label>
                        <input type="number" name="ruc" id="ruc" value="{{$client->ruc}}" class="form-control" placeholder="Numero de Documento (RUC)"
                            aria-describedby="helpId" >
                    </div>
                    <div class="form-group">
                        <label for="address">Dirección</label>
                        <input type="text" name="address" id="address" value="{{$client->address}}" class="form-control" placeholder="Dirección"
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="phone">Celular</label>
                        <input type="text" name="phone" id="phone" value="{{$client->phone}}" class="form-control" placeholder="Celular"
                            aria-describedby="helpId">
                            {{--<small id="helpId" class="form-text text-muted">Este campo es opcional</small>--}}
                    </div>

                    <div class="form-group">
                        <label for="email">Correo Electronico</label>
                        <input type="text" name="email" id="email" value="{{$client->email}}" class="form-control" placeholder="Correo Electronico"
                            aria-describedby="helpId">
                    </div>


                    <button type="submit" class="btn btn-primary mr-2">Editar</button>
                    <a href="{{route('clients.index')}}" class="btn btn-light ">
                        Cancelar
                    </a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
{!! Html::script('melody/js/dropify.js') !!}
@endsection
