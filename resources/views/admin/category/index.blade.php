    @extends('layouts.admin')
    @section('title','Gestión de Categorias')
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
                Sesión de Categorias
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categorias</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {{--<h4 class="card-title">Categorias</h4>--}}
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Categorias</h4>
                            {{--<i class="fas fa-ellipsis-v"></i>--}}
                            <div class="btn-group">
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+ Mas

                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a href="{{route('categories.create')}}"  class="dropdown-item" type="button">Crear Categoria</a>
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
                                        <th>Descripcion</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($categories as $category)
                                        <tr>
                                            <th scope="row">{{$category->id}}</th>
                                            <td>
                                            <a href="{{route('categories.show',$category)}}">{{$category->name}}</a>
                                            </td>
                                            <td>{{$category->description}}</td>
                                            <td width="10px">
                                                {!! Form::open(['route'=>['categories.destroy', $category->id], 'method'=>'DELETE']) !!}
                                                <a class="btn btn-info" href="{{route('categories.edit', $category->id)}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </td>
                                            <td width="10px">

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
