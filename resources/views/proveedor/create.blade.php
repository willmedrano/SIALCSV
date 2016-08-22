@extends('layouts.admin')
	@section('content')

	{!!Form::open(['route'=>'proveedor.store', 'method'=>'POST'])!!}
		@include('proveedor.forms.usr')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@endsection