@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        {!! Form::open(['route' => 'categoria.store']) !!}
        @include('catalogos.categorias.fields')
        {!! Form::submit('Guardar') !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection