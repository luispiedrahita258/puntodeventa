@extends('layouts.admin')
@section('title','Editar Usuario')
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
            Editar Usuario
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active"  aria-current="page">
                    <a href="{{route('users.index')}}">Usuarios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Usuario</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Editar Usuario</h4>
                    </div>
                    {!! Form::model($user,['route'=>['users.update',$user], 'method'=>'PUT']) !!}
                    <div class="form-group">
                        <label for="name">Nombre de Usuario</label>
                        <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control" placeholder="Nombre de Usuario"
                            aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="email">Correo Electronico</label>
                        <input type="text" name="email" id="email" value="{{$user->email}}" class="form-control" placeholder="Correo Electronico"
                            aria-describedby="helpId">
                    </div>
                    {{--<div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="Correo Electronico">
                        <small id="helpId" class="text-muted">Rellenar solo si desea cambiar la contraseña</small>
                    </div>--}}


                    @include('admin.user._form')

                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                    <a href="{{route('users.index')}}" class="btn btn-light ">
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

