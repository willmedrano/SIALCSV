@extends('plan')

@section('content')

       <!-- Core CSS - Include with every page -->
    {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
     {!!Html::style('assets/css/style.css')!!}  
      {!!Html::style('ssets/css/main-style.css')!!} 
            
  
<div class="content-top">
        
   
            <div class="col-sm-12 col-sm-offset-3 col-md-10 col-md-offset-3 main">        
               
                        <div class="row placeholders">          
          <div class="col-sm-7">           
      
        
<div class="panel panel-primary">
          <div class="panel-heading">
            <h1 class="panel-title">Registro Proveedor</h1>
          </div>



                                <div class="card card-block sameheight-item" style="height: 800px;">
                                 <div class="panel-body">
                                    <form role="form">
                                <div class="form-group has-success"> <label class="control-label" for="inputSuccess1">NOMBRE:</label> <input type="text" class="form-control" id="inputSuccess1"> <span class="has-success">Success message.</span> </div>
                                <div class="form-group has-warning">
                                <label class="control-label" for="inputWarning1">NIT:</label> <input type="text" class="form-control" id="inputWarning1"> <span class="has-warning">Warning message.</span> </div>
                                <div class="form-group has-error">
                                <label class="control-label" for="inputError1">TELEFONO:</label> <input type="text" class="form-control" id="inputError1"> <span class="has-error">Error message.</span> </div>
                                <div class="form-group has-success  has-feedback">
                                <label class="control-label" for="inputSuccess2">DIRECCION:</label> <input type="text" class="form-control" id="inputSuccess2"> <span class="fa fa-check form-control-feedback"></span> </div>
                                <div class="form-group has-warning  has-feedback">
                                <label class="control-label" for="inputWarning2">Hola: </label> <input type="text" class="form-control" id="inputWarning2"> <span class="fa fa-exclamation form-control-feedback"></span> </div>
                                <div class="form-group has-error  has-feedback">
                                <label class="control-label" for="inputError2">Ser o no ser</label> <input type="text" class="form-control" id="inputError2"> <span class="fa fa-times form-control-feedback"></span> </div>
                            <button class="btn-block btn-sm btn-success" align="center">Guardar</button>
                                            <button class="btn-block btn-sm btn-danger">Limpiar</button>
                                        </form>
                                  




                                </div>
                            </div>
                        </div>
                        </div>

 </div>
                        

@stop
