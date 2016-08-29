@extends('probandos')

@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>tel</th>
			<th>NIT</th>
			<th>Direccion</th>
		</thead>
		@foreach($prove as $prove)
		<tbody>
			<td>{{ $prove->nom }}</td>
			<td>{{ $prove->tel }}</td>
			<td>{{ $prove->NIT }}</td>
			<td>{{ $prove->dir }}</td>
		</tbody>
		@endforeach
	</table>

@stop()