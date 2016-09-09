@extends('plan')

@section('content')
  
<div class="content-top">
        
   
            <div class="col-sm-12 col-sm-offset-3 col-md-10 col-md-offset-3 main">        
               
                        <div class="row placeholders">          
          <div class="col-sm-7">           
      
        
<div class="panel panel-primary">
          <div class="panel-heading">
            <h1 class="panel-title">Registro Proveedor</h1>
          </div>



                                <div class="card card-block sameheight-item" style="height: 550px;">
                                 <div class="panel-body">
                                    <form role="form">
                                <div class="form-group has-success"> <label class="control-label" for="inputSuccess1">NOMBRE:</label> <input type="text" class="form-control" id="inputSuccess1"> <span class="has-success">Solo letras.</span> </div>
                                <div class="form-group has-success">
                                <label class="control-label" for="inputWarning1">NIT:</label> <input type="text" class="form-control" id="inputWarning1"> <span class="has-success">solo numero.</span> </div>
                                <div class="form-group has-success">
                                <label class="control-label" for="inputError1">TELEFONO:</label> <input type="text" class="form-control" id="inputError1"> <span class="has-success">solo numeros.</span> </div>
                                
                                <div class="form-group has-success"> <label class="control-label" for="inputSuccess1">DIRECCION:</label> <input type="text" class="form-control" id="inputSuccess1"> <span class="has-success">llene el campo.</span> </div>
                            <button class="btn-block btn-sm btn-success" align="center">Guardar</button>
                                            <button class="btn-block btn-sm btn-danger">Limpiar</button>
                                        </form>
                                  




                                </div>
                            </div>
                        </div>
                        </div>

 </div>
                        

@stop
