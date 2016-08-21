<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	{!! Form::open() !!}
    <div class="form-group">
    	{!! Form::label('Nombre: ') !!}
    	{!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingese el nombre del usuario']) !!}
    </div>
{!! Form::close() !!}
</body>
</html>