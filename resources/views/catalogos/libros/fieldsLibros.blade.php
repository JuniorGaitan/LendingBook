<div class="row">
    <div class="col-lg-12">

        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            {!! Form::text('libro',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('libro'))>0, 'errors.message', ['errores' => $errors->get('libro')])


        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Editorial</label>
            {!! Form::text('editorial',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('editorial'))>0, 'errors.message', ['errores' => $errors->get('editorial')])
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Autor</label>
            {!! Form::text('autor',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('autor'))>0, 'errors.message', ['errores' => $errors->get('autor')])
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Categoria</label>
            <select-combustibles 
            url="/api-app/categorias" 
            nombre="categoria_id" 
            label="categoria" />
        </div>
       
        
        <div class="form-group">
            <label for="exampleInputEmail1">cantidad</label>
            {!! Form::text('cantidad',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('cantidad'))>0, 'errors.message', ['errores' => $errors->get('cantidad')])
        </div>
   
    </div>
   
</div>
