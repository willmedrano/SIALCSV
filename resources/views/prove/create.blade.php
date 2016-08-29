@extends('probandos')
<?php $message=Session::get('message')?>

@if($message=='store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Exito!!</strong> Proveedor Creado
</div>
@endif
@section('content')


    {!! Form::open(['route'=>'prove.store','method'=>'POST']) !!}
        <div class="form-group">
        {!! Form::label('Nombre:')!!}
        {!! Form::text('nom',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Proveedor','autofocus' ]) !!}
        </div>

        <div class="form-group">
        {!! Form::label('Telefono:')!!}
        {!!Form::tel('tel',null,['class'=>'form-control','placeholder'=>'Ingrese el Telefono del Proveedor']) !!}
        </div>  

        <div class="form-group">
        {!! Form::label('NIT:')!!}
        <input type="text" name="nit" value="" placeholder="nit" class="form-control" >
         </div>

        <div class="form-group">    
        {!! Form::label('Dirrecion:')!!}
        {!!Form::textarea('dir',null,['class'=>'form-control','placeholder'=>'Ingrese la Dirrecion del Proveedor']) !!}
        </div>
        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}



    {!! Form::close() !!}

    



        @stop