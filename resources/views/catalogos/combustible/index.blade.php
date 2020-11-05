@extends('layouts.app')
@section('content')
<a href="{{ route('combustible.add') }}" class="btn btn-info btn-sm">
    Nuevo Combustible
</a>
<div class="row">
    <div class="col-lg-12">
        <pre>
            {{ $model }}
        </pre>
    </div>
    <div class="col-lg-12">
        {!! Form::open(['route' => ['combustible.store'],'method' => 'post']) !!}
        {!! Form::token() !!}
        <div class="col-lg-6">
            <select-combustibles label="combustible" url="/catalogos/combustible" nombre="ppp_id" :selected="{{ $model }}" />
        </div>
        <div class="col-lg-6">
            <button type="submit" class="btn btn-danger btn-sm">
                Eliminar
            </button>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div class="table-responsive">
    <table class="table table-sm">
        <thead>
            <tr class="bg-dark text-white">


            </tr>
        </thead>
        <tbody>
            @foreach($rows as $row)
            <tr>
                <td>{{ $row->id  }}</td>
                <td>{{ $row->combustible  }}</td>
                <td>
                    <div class="btn-group-sm">
                        {!! Form::open(['route' => ['combustible.delete',$row->id],'method' => 'delete']) !!}
                        {!! Form::token() !!}
                        <button type="submit" class="btn btn-danger btn-sm">
                            Eliminar
                        </button>
                        {!! Form::close() !!}
                        <a href="{{ route('combustible.edit',$row->id) }}" class="btn btn-danger btn-sm">
                            Editar
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection