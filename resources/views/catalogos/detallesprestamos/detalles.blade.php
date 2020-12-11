@extends('layouts.app')
@section('content')
<div class="row">
    <div class="card-body">
        {!! Form::open(['route' => 'detalleprestamo.store']) !!}
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-dark">
                    <tr role="rowheader">
                        <th width="100">ID
                        <th>Fecha Entrada</th>
                        <th>Fecha Salida</th>
                        <th>Usuario</th>
                        <th>Estado</th>
                        <th width="100"></th>
                    </tr>
                </thead>
                <tbody>
                   
                    <tr role="rows">
                        <td>{{ $rows->id }}</td>
                        <td>{{ $rows->fecha_entrada }}</td>
                        <td>{{ $rows->fecha_salida }}</td>
                        <td>{{ $rows->persona->nombres}}</td>
                        <td>{{ $rows->estado->estado}}</td>
                        </td>
                    </tr>
                  

                </tbody>
            </table>
        </div>
        @include('catalogos.detallesprestamos.fields', $rows)
        {!! Form::submit('Guardar') !!}
        {!! Form::close() !!}

    </div>

</div>
@endsection