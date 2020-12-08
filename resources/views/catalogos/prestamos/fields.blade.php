<div class="form-group">

    <div class="form-group">
        <label for="exampleInputEmail1">Sexo</label>
        <select-combustibles 
        url="/api-app/personas" 
        nombre="responsable_libro_id" 
        label="nombre" />
    </div>
    <label for="exampleInputEmail1">Libro</label>
    {!! Form::text('prestamo',null,$attributes=['class' => 'form-control']) !!}
    <small id="emailHelp" class="form-text text-muted">Nombre de la categoria</small>
   
</div>