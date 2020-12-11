@extends('layouts.app')
@section('content')
<div class="row">

    
    <div class="card-body">
        {!! Form::model($model, ['route' => ['detalleprestamo.update', $model->id],'method'=>'patch'])!!}

        @include('catalogos.detallesprestamos.fields')
        {!! Form::submit('Actualizar') !!}
        {!! Form::close() !!}

    </div>
</div>
@endsection