@extends('layouts.admin')
@section('title','Información de Cliente')
@section('styles')
@endsection
@section('create')
<li class="nav-item d-none d-lg-flex">
    <a class="nav-link" href="{{route('clients.create')}}">
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
            {{$client->name}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page" ><a href="{{route('clients.index')}}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$client->name}}</li>
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
                            <h3>{{$client->name}}</h3>
                            <div class="d-flex justify-content-between">

                            </div>
                        </div>
                        <div class="border-bottom py-4">
                            <div class="list-group">
                                <button type="button" class="list-group-item list-group-item-action active">
                                    Sobre el Cliente
                                </button>
                                <button type="button" class="list-group-item list-group-item-action">
                                    Historial de Compras
                                </button>
                               {{-- <button type="button" class="list-group-item list-group-item-action ">
                                    Registrar Producto
                                </button>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 pl-lg-5">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4>Información del Cliente</h4>
                            </div>
                        </div>
                        <div class="profile-feed">
                            <div class="d-flex align-items-start profile-feed-item">
                                <div class="form-group col-md-6">
                                    <strong><i class="fab fa-product-hunt mr-1"> Nombre del Cliente</i></strong>
                                    <p class="text-muted">
                                        {{$client->name}}
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-file-alt mr-1"> Numero de Documento</i></strong>
                                    <p class="text-muted">
                                        {{$client->dni}}
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-id-card mr-1"> Numero de Documento (RUC)</i></strong>
                                    <p class="text-muted">
                                        {{$client->ruc}}
                                    </p>
                                    <hr>
                                </div>
                                <div class="form-group col-md-6">
                                    <strong><i class="fas fa-mobile mr-1"> Celular</i></strong>
                                    <p class="text-muted">
                                        {{$client->phone}}
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-map-marked-alt mr-1"> Dirección</i></strong>
                                    <p class="text-muted">
                                        {{$client->address}}
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-envelope mr-1"> Correo Electronico</i></strong>
                                    <p class="text-muted">
                                        {{$client->email}}
                                    </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-profile" user="tabpanel"
                        aria-labelledby="list-profile-list">


                        <div class="d-flex justify-content-between">
                            <div>
                                <h4>Historial de compras</h4>
                            </div>
                        </div>
                        <div class="profile-feed">
                            <div class="d-flex align-items-start profile-feed-item">

                                <div class="table-responsive">
                                    <table id="order-listing" class="table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Fecha</th>
                                                <th>Total</th>
                                                <th>Estado</th>
                                                <th style="width:50px;">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($client->sales as $sale)
                                            <tr>
                                                <th scope="row">
                                                    <a href="{{route('sales.show', $sale)}}">{{$sale->id}}</a>
                                                </th>
                                                <td>{{$sale->purchase_date}}</td>
                                                <td>{{$sale->total}}</td>

                                                @if ($sale->status == 'VALID')
                                                <td>
                                                    <a class="jsgrid-button btn btn-success" href="{{route('change.status.sales', $sale)}}" title="Editar">
                                                        Activo <i class="fas fa-check"></i>
                                                    </a>
                                                </td>
                                                @else
                                                <td>
                                                    <a class="jsgrid-button btn btn-danger" href="{{route('change.status.sales', $sale)}}" title="Editar">
                                                        Cancelado <i class="fas fa-times"></i>
                                                    </a>
                                                </td>
                                                @endif
                                                <td style="width: 50px;">

                                                    <a href="{{route('sales.pdf', $sale)}}" class="jsgrid-button jsgrid-edit-button"><i class="far fa-file-pdf"></i></a>
                                                    {{--  <a href="#" class="jsgrid-button jsgrid-edit-button"><i class="fas fa-print"></i></a>  --}}
                                                    <a href="{{route('sales.show', $sale)}}" class="jsgrid-button jsgrid-edit-button"><i class="far fa-eye"></i></a>


                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                              <td colspan="2"><strong>Total de monto comprado: </strong></td>
                                              <td colspan="3" align="left"><strong>s/{{$total_purchases}}</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>





            </div>
        </div>
    </div>
    <div class="card-footer text-muted">
        <a href="{{route('clients.index')}}" class="btn btn-primary float-right">Regresar</a>
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
