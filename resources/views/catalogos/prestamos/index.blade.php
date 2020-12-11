@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <a href="{!! route('prestamo.add') !!}" class="btn btn-link">
            <i class="fas fa-plus-circle    "></i> Agregar Prestamos
        </a>
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
                    @foreach ($rows as $row)
                    <tr role="row">
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->fecha_entrada }}</td>
                        <td>{{ $row->fecha_salida }}</td>
                        <td>{{ $row->persona->nombres}}</td>
                        <td>{{ $row->estado->estado}}</td>

                       


                       
                        <td>

                            <div class="btn-group">
                                <a href="{!! route('prestamo.detalles',$row->id) !!}" class="btn btn-link">
                                    <i class="far fa-eye"></i>
                                </a>
                                <a href="{!! route('prestamo.edit',$row->id) !!}" class="btn btn-link">
                                    <i class="fas fa-edit    "></i>
                                </a>
    
                                {!! Form::open(['route' => ['prestamo.delete',$row->id],'method'=>'delete']) !!}
                                <button type="submit" class="btn btn-link text-red">
                                <i class="fas fa-trash    "></i>
                                </button>
                                {!! Form::close() !!}
                            </div>


                            

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection