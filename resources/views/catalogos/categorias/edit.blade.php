@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        {!! Form::model($model, ['route' => ['categoria.update', $model->id],'method'=>'patch'])
        !!}

        @include('catalogos.categorias.fields')

        <button type="submit" class="btn btn-success">
            Actualizar
        </button>

        {!! Form::close() !!}

    </div>
</div>
@endsection