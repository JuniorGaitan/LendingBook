<div class="form-group">

    
   
  
    {!! Form::text('prestamo_id',null,$rows->id =['class' => 'form-control']) !!}

    <div class="form-group">
        <label for="exampleInputEmail1">Libro</label>
        <select-combustibles 
        url="/api-app/libros" 
        nombre="libro_id" 
        label="libro" />
    </div>
  
    <label for="exampleInputEmail1">Cantidad</label>
    {!! Form::text('cantidades',null,$attributes=['class' => 'form-control']) !!}
    <small id="emailHelp" class="form-text text-muted">Cantidad de libros</small>
   
</div>