<div class="form-group">
    <label for="exampleInputEmail1">Libro</label>
    {!! Form::text('libro',null,$attributes=['class' => 'form-control']) !!}
    <small id="emailHelp" class="form-text text-muted">Nombre del libro</small>

    {!! Form::text('editorial',null,$attributes=['class' => 'form-control']) !!}
    <small id="emailHelp" class="form-text text-muted">Editorial</small>
    <label for="exampleInputEmail1">Autor</label>

    {!! Form::text('autor',null,$attributes=['class' => 'form-control']) !!}
    <small id="emailHelp" class="form-text text-muted">Nombre del Autor</small>

    <div class="form-group">
        <label for="exampleInputEmail1">Categoria</label>
       <div>
        @if ($model ?? '')
        <select-combustibles :selected="{{ $model ?? ''->etnia}}" 
        url="/api-app/categorias" 
            nombre="categoria_id"
             label="categoria" />
        @else
        <select-combustibles
         url="/api-app/categorias" 
         nombre="categoria_id" 
         label="categoria" />
        @endif
       </div>
        @includeWhen(count($errors->get('categoria_id'))>0, 'errors.message', ['errores' => $errors->get('categoria_id')])
    </div>
    <label for="exampleInputEmail1">cantidad</label>

    {!! Form::text('cantidad',null,$attributes=['class' => 'form-control']) !!}
    <small id="emailHelp" class="form-text text-muted">cantidad</small>




   
</div>