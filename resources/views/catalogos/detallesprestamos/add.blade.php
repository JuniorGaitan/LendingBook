@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">

        <div class="card border-primary">
            <div class="card-body">
                <h4 class="card-title">Detalles</h4>
                <p class="card-text">


                    {!! Form::open(['route' => 'detalleprestamo.store' ]) !!}
                    @include(,'catalogos.detallesprestamos.fields')
                    {!! Form::submit('Guardar',$attributes=['class' => 'form-control']) !!}
                    {!! Form::close() !!}
                </p>
            </div>
        </div>

    </div>
</div>
@endsection
