@extends('layouts.admin')
@section('title','Información de Producto')
@section('styles')

@endsection
@section('create')
<li class="nav-item d-none d-lg-flex">
    <a class="nav-link" href="{{route('products.create')}}">
        <span class="btn btn-primary">+ Crear Nuevo</span>
    </a>
</li>
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            {{$product->name}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('products.index')}}">Producto</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">

                                <img src="{{asset('image/'.$product->image)}}" alt="profile" class="img-lg  mb-3">
                                <h3>{{$product->name}}</h3>
                                <div class="d-flex justify-content-between">

                                </div>
                            </div>
                            <div class="border-bottom py-4">
                                <div class="list-group">
                                    <button type="button" class="list-group-item list-group-item-action active">
                                        Sobre el Proveedor
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action">
                                        Productos
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action ">
                                        Registrar Producto
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-8 pl-lg-5">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>Información del Producto</h4>
                                </div>
                            </div>
                            <div class="profile-feed">
                                <div class="d-flex align-items-start profile-feed-item">
                                    <div class="form-group col-md-6">
                                        <strong><i class="fab fa-product-hunt mr-1"> Codigo</i></strong>
                                        <p class="text-muted">
                                            {{$product->code}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-highlighter mr-1"> Nombre del Producto</i></strong>
                                        <p class="text-muted">
                                            {{$product->name}}
                                        </p>
                                        <hr>
                                        <strong><i class="fab fa-bitcoin mr-1"> Stock</i></strong>
                                        <p class="text-muted">
                                            {{$product->stock}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-file-image mr-1"> Imagen</i></strong>
                                        <p class="text-muted">
                                            {{$product->image}}
                                        </p>
                                        <hr>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <strong><i class="fas fa-money-bill mr-1"> Precio</i></strong>
                                        <p class="text-muted">
                                            {{$product->sell_price}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-question-circle mr-1"> Estado </i></strong>
                                        <p class="text-muted">
                                            {{$product->status}}
                                        </p>
                                        <hr>
                                        {{--  <strong><i class="fas fa-map-marked-alt mr-1"></i> Categoría</strong>
                                        <p class="text-muted">
                                            {{$product->category->name}}
                                        </p>
                                        <hr>  --}}
                                        {{--  <strong><i class="fas fa-map-marked-alt mr-1"></i> Proveedor</strong>
                                        <p class="text-muted">
                                            {{$product->provider->name}}
                                        </p>
                                        <hr>  --}}
                                        <strong><i class="fas fa-question-circle mr-1"> Codigo de Barras </i></strong>
                                        <p class="text-muted">
                                            {!! DNS1D::getBarcodeHTML($product->code, 'EAN13'); !!}
                                        </p>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        {{--<button class="btn btn-primary btn-block">{{$product->status}}</button>--}}
                <div class="card-footer text-muted">
                    <a href="{{route('products.index')}}" class="btn btn-primary float-right">Regresar</a>
                    @if ($product->status =='ACTIVE')
                    <button class="btn btn-success float-right mr-2">{{$product->status}}</button>
                    @else
                    <button class="btn btn-warning float-right">{{$product->status}}</button>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/profile-demo.js') !!}
{!! Html::script('melody/js/data-table.js') !!}



@endsection
