@extends('layouts.admin')
@section('title','Información de Venta')
@section('styles')
<style type="text/css">
    .unstyled-button {
        border: none;
        padding: 0;
        background: none;
    }

</style>
@endsection
@section('create')
<li class="nav-item d-none d-lg-flex">
    <a class="nav-link" href="{{route('sales.create')}}">
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
            Información de Venta
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('sales.index')}}">Ventas</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Información de Venta</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group row">
                        <div class="col-md-4 text-center">
                            <label class="form-control-label">Cliente</label>
                            <p><a href="{{route('clients.show',$sale->client)}}">{{$sale->client->name}}</a></p>
                        </div>
                        <div class="col-md-4 text-center">
                            <label class="form-control-label">Vendedor</label>
                            <p>{{$sale->user->name}}</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <label class="form-control-label">Número de Venta</label>
                            <p>{{$sale->id}}</p>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="form-group">
                        <h4 class="card-title">Detalle de Venta</h4>
                        <div class="table-responsive col-md-12">
                            <table id="saleDetails" class="table">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Precio Venta</th>
                                        <th>Descuento</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal (PES)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th colspan="4">
                                            <p align="right">SUBTOTAL:</p>
                                        </th>
                                        <th>
                                            <p align="right">s/{{number_format($subtotal,2)}}</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="4">
                                            <p align="right">TOTAL IMPUESTO ({{$sale->tax}}%):</p>
                                        </th>
                                        <th>
                                            <p align="right">s/{{number_format($subtotal*18/100,2)}}</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="4">
                                            <p align="right">TOTAL: </p>
                                        </th>
                                        <th>
                                            <p align="right">s/{{number_format($sale->total,2)}}</p>
                                        </th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($saleDetails as $saleDetail )
                                    <tr>
                                        <td>{{$saleDetail->product->name}}</td>
                                        <td>{{$saleDetail->price}}</td>
                                        <td>{{$saleDetail->discount}}</td>
                                        <td>{{$saleDetail->quantity}}</td>
                                        <td>s/{{number_format($saleDetail->quantity*$saleDetail->price -$saleDetail->quantity*$saleDetail->price*$saleDetail->discount/100,2)}}
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                {{--<button class="btn btn-primary btn-block">{{$product->status}}</button>--}}
                <div class="card-footer text-muted">
                    <a href="{{route('sales.index')}}" class="btn btn-primary float-right">Regresar</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/profile-demo.js') !!}
{!! Html::script('melody/js/data-table.js') !!}
{!! Html::script('melody/js/avgrund.js') !!}



@endsection
