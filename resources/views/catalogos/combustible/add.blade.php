@extends('layouts.app')
@section('content')
<div class="container">
    {!! Form::open(['route' => 'combustible.store']) !!}
    //
    {!! Form::close() !!}
</div>
@endsection