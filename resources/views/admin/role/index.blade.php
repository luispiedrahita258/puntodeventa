@extends('layouts.admin')
@section('title','Gestión de Roles del Sistema')
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
            Sesión de Roles del Sistema
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Roles del Sistema</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    {{--<h4 class="card-title">Categorias</h4>--}}
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Roles del Sistema</h4>
                        {{--<i class="fas fa-ellipsis-v"></i>--}}
                        <div class="btn-group">
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+ Mas

                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="{{route('roles.create')}}"  class="dropdown-item" type="button">Crear Roles del Sistema</a>
                            </div>
                          </div>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <table id="order" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($roles as $rol)
                                    <tr>
                                        <th scope="row">{{$rol->id}}</th>
                                        <td>
                                        <a href="{{route('roles.show',$rol)}}">{{$rol->name}}</a>
                                        </td>
                                        <td>{{$rol->description}}</td>
                                        <td width="10px">
                                            <a class="btn btn-info" href="{{route('roles.edit', $rol->id)}}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                        <td width="10px">
                                            {!! Form::open(['route'=>['roles.destroy', $rol->id], 'method'=>'DELETE']) !!}
                                            <button class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection
