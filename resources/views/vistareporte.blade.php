<!DOCTYPE html>
<style type="text/css" >
    


.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
legend{
    color: #36A0FF;
}
}
    
</style>
<html>
<head>
	<title>Listado de Empleados</title>
</head>
<body>
<h1> practicando pdf </h1>

<table class="table  table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr align="center" class="warning">
		<th> nombre</th>
		<th> apellido</th>
		<th> cargo</th>
		</tr>
	</thead>
	<tbody>
		@foreach($empleados as $empleado)
		<tr> 
          <td>{{$empleado->nomEmp}}</td>
          <td>{{$empleado->apeEmp}}</td>
          <td>{{$empleado->cargoEmp}}</td>

		</tr>
     @endforeach
	</tbody>


</table>
</body>
</html>
