@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        {!! Form::model($model, ['route' => ['color.update', $model->id]])
        !!}

        <div class="form-group">
            <label for="exampleInputEmail1">Color</label>
            {!! Form::text('color',null,$attributes=['class' => 'form-control']) !!}
            <small id="emailHelp" class="form-text text-muted">Describa el nuvo color</small>
        </div>

        {!! Form::close() !!}

    </div>
</div>
@endsection