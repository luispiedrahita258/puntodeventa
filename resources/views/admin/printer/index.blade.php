@extends('layouts.admin')
@section('title','Gestion de Impresora')
@section('styles')
<style type="text/css">
    .unstyled-button {
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
            Sesión de Impresora
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Impresora</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    {{--<h4 class="card-title">Categorias</h4>--}}
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Sesión de Impresora</h4>
                        {{--<i class="fas fa-ellipsis-v"></i>--}}
                        {{-- <div class="btn-group">
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+ Mas

                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="{{route('clients.create')}}" class="dropdown-item" type="button">Crear
                        Empresa</a>
                    </div>
                </div> --}}
            </div>
            <div class="form-group">
                <strong><i class="fab fa-printers-hunt mr-1"> Nombre de la Impresora</i></strong>
                <p class="text-muted">
                    {{$printer->name}}
                </p>
                <hr>
            </div>

        </div>
        <div class="card-footer text-muted">
            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                data-target="#exampleModal-2">Actualizar</button>
        </div>
    </div>
</div>
</div>
</div>
<div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Actualizar Datos de Impresora</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::model($printer,['route'=>['printers.update',$printer], 'method'=>'PUT', 'files'=>true]) !!}
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Nombre de la Impresora</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                        value="{{$printer->name}}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
            </div>
{!! Form::close() !!}
        </div>
    </div>
</div>
<!-- Modal Ends -->
@endsection

@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
{!! Html::script('melody/js/dropify.js') !!}
@endsection
