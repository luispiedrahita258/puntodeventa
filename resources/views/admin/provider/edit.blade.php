@extends('layouts.admin')
@section('title','Editar Proveedor')
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
            Editar Proveedor
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" href="{{route('providers.index')}}" aria-current="page">Proveedores</li>
                <li class="breadcrumb-item active" aria-current="page">Editar Proveedor</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Editar Proveedor</h4>
                    </div>
                    {!! Form::model($provider,['route'=>['providers.update',$provider], 'method'=>'PUT']) !!}
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$provider->name}}" aria-describedby="helpId" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electronico</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{$provider->email}}"  aria-describedby="emailHelpId" placeholder="ejemplo@gmail.com" required>
                      </div>
                      <div class="form-group">
                          <label for="number">Número de RUC</label>
                          <input type="number" class="form-control" name="ruc_number" id="ruc_number" value="{{$provider->ruc_number}}"  aria-describedby="helpId" placeholder="Número de RUC" required>
                        </div>

                        <div class="form-group">
                          <label for="address">Correo Electronico</label>
                          <input type="text" class="form-control" name="address" id="address" value="{{$provider->address}}"  aria-describedby="helpId" placeholder="Dirección" required>
                        </div>
                        <div class="form-group">
                          <label for="phone">Número de Contacto</label>
                          <input type="number" class="form-control" name="phone" id="phone" value="{{$provider->phone}}"  aria-describedby="helpId" placeholder="Número de Celular" required>
                        </div>


                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                    <a href="{{route('providers.index')}}" class="btn btn-light ">
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
{!! Html::script('melody/js/data-table.js') !!}
@endsection


