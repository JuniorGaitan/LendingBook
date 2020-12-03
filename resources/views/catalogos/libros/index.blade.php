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
                        <th>Nombre</th>
                        <th>Autor</th>
                        <th>Editorial</th>
                        <th>Categoria</th>
                        <th>Cantidad</th>
                        <th width="100"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $row)
                    <tr role="row">
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->nombre }}</td>
                        <td>{{ $row->autor }}</td>
                        <td>{{ $row->editorial }}</td>
                        <td>{{ $row->categoria_id }}</td>
                        <td>{{ $row->cantidad }}</td>


                       
                        <td>

                            <div class="btn-group">
                                <a href="{!! route('libro.edit',$row->id) !!}" class="btn btn-link">
                                    <i class="fas fa-edit    "></i>
                                </a>
    
                                {!! Form::open(['route' => ['libro.delete',$row->id],'method'=>'delete']) !!}
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