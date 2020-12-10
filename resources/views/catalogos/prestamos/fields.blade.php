<div class="form-group">

    <div class="form-group">
        <label for="exampleInputEmail1">Responsable</label>
        <select-combustibles 
        url="/api-app/personas" 
        nombre="persona_id" 
        label="nombres" />
    </div>
    <label for="exampleInputEmail1">Fecha de salida</label>
    {!! Form::date('fecha_salida',null,$attributes=['class' => 'form-control']) !!}    
    <small id="emailHelp" class="form-text text-muted">Fecha de salida del libro</small>

    <label for="exampleInputEmail1">Fecha de entrega</label>
    {!! Form::date('fecha_entrada',null,$attributes=['class' => 'form-control']) !!}
    <small id="emailHelp" class="form-text text-muted">Fecha de entrada del libro</small>
  
    <label for="exampleInputEmail1">Estados</label>
    <select-combustibles 
    url="/api-app/estados" 
    nombre="estado_id" 
    label="estado" />
</div>