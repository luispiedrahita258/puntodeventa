
<h3>Permisos Especiales</h3>
<div class="form-group">
<label> {!! Form::radio('special', 'all-access' ) !!}Acceso Total</label>
<label>{!! Form::radio('special', 'no-access') !!}Ningún Acceso</label>

</div>

<h3>Listado de Permisos</h3>
<div class="form-group">
    <ul class="list-unstyles">
        @foreach ($permissions as $permission )
        <li>
            <label>
                {!! Form::checkbox('permissions[]',$permission->id, null ) !!}
                {{$permission->name}}
                <em>({{$permission->description}})</em>
            </label>
        </li>
        @endforeach
    </ul>
</div>

