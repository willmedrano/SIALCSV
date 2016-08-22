<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href="jumbotron-narrow.css" rel="stylesheet">
</head>
<body>
	

<div class="jumbotron">
        <h1>RESGISTRAR PROVEEDOR</h1>

        {!! Form::open() !!}
    <div class="form-group">
    <section>
        
    
        
    
    	{!! Form::label('Nombre: ') !!}
    	{!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingese el nombre del proveedor', 'requiered', 'size'=> 10, 'maxlength'=>4]) !!}

        {!! Form::label('Apellido: ') !!}
        {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingese el Apellido del proveedor']) !!}
     </section>
    </div>
{!! Form::close() !!}

        
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
      </div>
</body>
</html>