@extends('probandos')
    @section('content')


<h1>RESGISTRAR PROVEEDOR</h1>

        {!! Form::open() !!}
    <div class="form-group">
            
    
        
    
        {!! Form::label('Nombre: ') !!}
        {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingese el nombre del proveedor', 'requiered', 'size'=> 10, 'maxlength'=>4]) !!}

        {!! Form::label('Apellido: ') !!}
        {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingese el Apellido del proveedor']) !!}
      
    </div>
{!! Form::close() !!}

        
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>


        @stop