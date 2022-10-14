<div class="box box-info padding-1">
    <div class="box-body">
        
       
        <div class="form-group">
            {{ Form::label('Nombre Puesto') }}
            {{ Form::text('nombrePuesto', $puesto->nombrePuesto, ['class' => 'form-control' . ($errors->has('nombrePuesto') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombrePuesto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    </br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('puestos.index') }}"> Atras</a>

    </div>
</div>