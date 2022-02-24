@extends('layouts.admin')
@section('title','Reporte de Ventas')
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
            Reporte de Ventas
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reporte de Ventas</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    {{--<h4 class="card-title">Categorias</h4>--}}
                    <div class="d-flex justify-content-between">
                        {{-- <h4 class="card-title">Reporte de Ventas</h4> --}}
                        {{--<i class="fas fa-ellipsis-v"></i>--}}
                        {{-- <div class="btn-group">
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+ Mas

                            </a>
                             <div class="dropdown-menu dropdown-menu-right">
                              <a href="{{route('sales.create')}}"  class="dropdown-item" type="button">Crear Ventas</a>
                            </div>
                          </div> --}}
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <span>Fecha de Consulta: <b> </b></span>
                            <div class="form-group">
                                <strong>{{\Carbon\Carbon::now()->format('d/m/y')}}</strong>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <span>Cantidad de Registros: <b> </b></span>
                            <div class="form-group">
                                <strong>{{$sales->count()}}</strong>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <span>Total de Ingresos: <b> </b></span>
                            <div class="form-group">
                                <strong>{{$total}}</strong>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <table id="order" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha</th>
                                    <th>Total</th>
                                    <th>Estado</th>
                                    {{--<th>Editar</th>--}}
                                    {{--<th>Eliminar</th>--}}
                                    <th>PDF</th>
                                    <th>Imprimir</th>
                                    <th>Ver</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($sales as $sale)
                                    <tr>
                                        <th scope="row">

                                            <a href="{{route('sales.show', $sale)}}"> {{$sale->id}}</a>
                                        </th>
                                        {{\Carbon\Carbon::parse($sale->sale_date)->format('d M y h:i a')}}
                                        <td>{{$sale->total}}</td>
                                        <td>{{$sale->status}}</td>
                                        {{--<td width="10px">
                                            <a class="btn btn-info" href="{{route('sales.edit', $sale->id)}}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>--}}
                                       {{--<td width="10px">
                                            {!! Form::open(['route'=>['sales.destroy', $sale->id], 'method'=>'DELETE']) !!}
                                            <button class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>--}}
                                        <td width="10px"><a href="{{route('sales.pdf',$sale)}}" class="btn btn-success"><i class="far fa-file-pdf"></i></a></td>
                                        <td width="10px"><a href="{{route('sales.print',$sale)}}" class="btn btn-warning"><i class="fas fa-print"></i></a></td>
                                        <td width="10px"><a href="{{route('sales.show', $sale)}}" class="btn btn-secondary"><i class="far fa-eye"></i></a></td>



                                            {!! Form::close() !!}

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
