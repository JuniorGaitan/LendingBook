@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <a href="{!! route('libro.add') !!}" class="btn btn-link">
            <i class="fas fa-plus-circle    "></i> Agregar Libro
        </a>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-dark">
                    <tr role="rowheader">
                        <th width="100">ID
                        <th>Libro</th>
                        <th>Cantidad</th>
                        <th>Prestamo</th>
                        <th width="100"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $row)
                    <tr role="row">
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->libro_id }}</td>
                        <td>{{ $row->cantidad }}</td>
                        <td>{{ $row->prestamo_id }}</td>


                       
                        <td>

                            <div class="btn-group">
                                <a href="{!! route('detalleprestamo.edit',$row->id) !!}" class="btn btn-link">
                                    <i class="fas fa-pen-alt    "></i>
                                </a>
    
                                {!! Form::open(['route' => ['detalleprestamo.delete',$row->id],'method'=>'delete']) !!}
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