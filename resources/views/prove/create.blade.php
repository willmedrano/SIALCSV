@extends('probandos')
    @section('content')
    
<form method="get" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" >
    <small id="emailHelp" class="form-text text-muted">nombre del Empleado.</small>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellido</label>
    <input type="text" class="form-control" required  id="exampleInputPassword1" placeholder="Apellido">
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Cargo</label>
    <select class="form-control" id="exampleSelect1">
      <option>Administrador</option>
      <option>Vendedor</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleTextarea">Descripción</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
    <fieldset class="form-group">
    
  <button type="submit" class="btn btn-primary">Submit</button>

  <input type="submit" name="bonton" value="laravel">
  
  <button type="button" class="btn btn-xs btn-link">Info</button>
</form>
    
        
      

        @stop