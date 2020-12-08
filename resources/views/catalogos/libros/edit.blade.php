@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        {!! Form::model($model, ['route' => ['libro.update', $model->id],'method'=>'patch'])
        !!}

        @include('catalogos.libros.fields')
        <button type="submit" class="btn btn-success">
            Actualizar
        </button>
        {!! Form::close() !!}

    </div>
</div>
@endsection