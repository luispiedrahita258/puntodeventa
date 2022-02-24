@extends('layouts.admin')
@section('title','Gestión de Productos')
@section('styles')
<style type="text/css">
    .unstyled-button{
        border: none;
        padding: 0;
        background: none;
    }
</style>
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Sesión de Productos
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Productos</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    {{--<h4 class="card-title">Categorias</h4>--}}
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Productos</h4>
                        {{--<i class="fas fa-ellipsis-v"></i>--}}
                        <div class="btn-group">
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+ Mas

                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="{{route('products.create')}}"  class="dropdown-item" type="button">Crear Producto</a>
                              <a class="dropdown-item" href="{{route('print_barcode')}}">Exportar códigos de barras</a>
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
                                    <th>Stock</th>
                                    <th>Estado</th>
                                    <th>Categoria</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{$product->id}}</th>
                                        <td>
                                        <a href="{{route('products.show',$product)}}">{{$product->name}}</a>
                                        </td>
                                        <td>{{$product->stock}}</td>
                                        @if ($product->status == 'ACTIVE')
                                        <td>
                                            <a class="btn btn-success" href="{{route('change.status.products', $product)}}">
                                                ACTIVO <i class="fas fa-check"></i>
                                            </a>
                                        </td>
                                        @else

                                        <td>
                                            <a class="btn btn-danger" href="{{route('change.status.products', $product)}}">
                                                DESACTIVADO <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                        @endif

                                        <td>{{$product->category->name}}</td>
                                        <td width="10px">
                                            <a class="btn btn-info" href="{{route('products.edit', $product)}}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                        <td width="10px">
                                            {!! Form::open(['route'=>['products.destroy', $product], 'method'=>'DELETE']) !!}
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
