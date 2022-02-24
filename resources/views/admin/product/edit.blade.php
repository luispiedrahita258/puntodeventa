@extends('layouts.admin')
@section('title','Editar Producto')
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
            Edición de Producto
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" href="{{route('products.index')}}" aria-current="page">Productos</li>
                <li class="breadcrumb-item active" aria-current="page">Edición de Producto</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edición de Producto</h4>
                    </div>
                    {!! Form::model($product,['route'=>['products.update',$product], 'method'=>'PUT', 'files'=>true]) !!}

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control" placeholder="Nombre"
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="sell_price">Precio de venta</label>
                        <input type="numer" name="sell_price" id="sell_price" value="{{$product->sell_price}}"class="form-control" placeholder="$"
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach ($categories as $category )
                            <option value="{{ $category->id }}" @if ($category->id == $product->category_id)
                                selected @endif>{{ $category->name }}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="provider_id">Proveedor</label>
                        <select class="form-control" name="provider_id" id="provider_id">
                            @foreach ($providers as $provider )
                                <option value="{{ $provider->id }}" @if ($provider->id == $product->provider_id)
                                selected @endif>{{ $provider->name }}</option>
                                @endforeach
                        </select>
                    </div>

                    {{--<div class="custom-file mb-4">
                        <input type="file" class="custom-file-input" id="image" name="image" lang="es">
                        <label class="custom-file-label" for="image">Seleccionar Archivo</label>
                      </div>--}}
                      <div class="card-body">
                        <h4 class="card-title d-flex">Imagen del Producto
                          <small class="ml-auto align-self-end">
                            {{--<a href="dropify.html" class="font-weight-light" target="_blank">Seleccionar Archivo</a>--}}
                          </small>
                        </h4>
                        <input type="file" id="picture" name="picture"  class="dropify"  />
                      </div>

                    <button type="submit" class="btn btn-primary mr-2">Editar</button>
                    <a href="{{route('products.index')}}" class="btn btn-light ">
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
