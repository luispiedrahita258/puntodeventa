@extends('layouts.admin')
@section('title','Gestión de Compras')
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
            Sesión de Compras
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Compras</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    {{--<h4 class="card-title">Categorias</h4>--}}
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Compras</h4>
                        {{--<i class="fas fa-ellipsis-v"></i>--}}
                        <div class="btn-group">
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+ Mas

                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="{{route('purchases.create')}}"  class="dropdown-item" type="button">Crear Compra</a>
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
                                    <th>Ver</th>

                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($purchases as $purchase)
                                    <tr>
                                        <th scope="row">

                                            <a href="{{route('purchases.show', $purchase)}}"> {{$purchase->id}}</a>
                                        </th>
                                        <td>{{$purchase->purchase_date}}</td>
                                        <td>{{$purchase->total}}</td>

                                        @if ($purchase->status == 'VALID')
                                        <td>
                                            <a class="btn btn-success" href="{{route('change.status.purchases', $purchase)}}">
                                                ACTIVO <i class="fas fa-check"></i>
                                            </a>
                                        </td>
                                        @else

                                        <td>
                                            <a class="btn btn-danger" href="{{route('change.status.purchases', $purchase)}}">
                                                CANCELADO <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                        @endif
                                        {{--<td width="10px">
                                            <a class="btn btn-info" href="{{route('purchases.edit', $purchase->id)}}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>--}}
                                       {{--<td width="10px">
                                            {!! Form::open(['route'=>['purchases.destroy', $purchase->id], 'method'=>'DELETE']) !!}
                                            <button class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>--}}
                                        <td width="10px"><a href="{{route('purchases.pdf',$purchase)}}" class="btn btn-danger"><i class="far fa-file-pdf"></i></a></td>
                                        <td width="10px"><a href="{{route('purchases.show', $purchase)}}" class="btn btn-success"><i class="far fa-eye"></i></a></td>



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
