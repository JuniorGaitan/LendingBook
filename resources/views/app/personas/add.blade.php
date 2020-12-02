@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        @if ($errors)
        <pre>
            {{ $errors }}
        </pre>
        @endif
       
        
        {!! Form::open(['route' => 'persona.store']) !!}
        @include('app.personas.fieldsPersonas')
        {!! Form::submit('Guardar') !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection