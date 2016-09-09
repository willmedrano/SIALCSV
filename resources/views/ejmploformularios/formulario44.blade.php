@extends('plan')

@section('content')
  

    {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
     {!!Html::style('assets/css/style.css')!!}  
      {!!Html::style('ssets/css/main-style.css')!!} 
<div class="content-top">
        
   
            <div class="col-sm-12 col-sm-offset-3 col-md-10 col-md-offset-3 main">        
               
                        <div class="row placeholders">          
          <div class="col-sm-7">           
      
        
<div class="panel panel-success">
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
                                <div align="center">
                                   <button class="btn btn-success btn-lg" align="center">Guardar</button>
                                </div>
                           
                                            
                                        </form>
                                  




                                </div>
                            </div>
                        </div>
                        </div>

 </div>
                        

@stop
