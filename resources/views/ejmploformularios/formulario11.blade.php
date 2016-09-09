@extends('plan')

@section('content')
  
<div class="content-top">
         <!-- Core CSS - Include with every page -->

    {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
     {!!Html::style('assets/css/style.css')!!}  
      {!!Html::style('ssets/css/main-style.css')!!} 
           
       
            <div class="col-sm-12 col-sm-offset-3 col-md-10 col-md-offset-3 main">        
               
                        <div class="row placeholders">          
          <div class="col-sm-7">           
      
  
                    
<div class="panel panel-primary">
          <div class="panel-heading">
           <h1 class="panel-title">Registro de Contrato</h1>
       
          </div>



                                <div class="card card-block sameheight-item" style="height: 345px;">
                                 <div class="panel-body">
                                    <form action="" method="post" class="form-group-sm" id="frmexpediente" name="frmexpediente">
                                     
                                        
                                             <label class="control-label">NOMBRE: </label>
                                             <input type="text" class="form-control underlined" placeholder="Escriba el nombre"> 
                                        
                                            <label class="control-label">NIT: </label> 
                                            <input type="text" class="form-control underlined" placeholder="0000-000000-000-0">
                                        
                                                <label class="control-label">TELEFONO: </label> 
                                                <input type="text" class="form-control underlined" placeholder="0000-0000" 
                                                class="fa fa-hpome"
                                                > 
                                        
                                            <label class="control-label">DIRECCION: </label> 
                                            <input type="text" class="form-control underlined" placeholder="Direccion"> 
                                        

                                     
                                       <br>
                                       <br>
                                       <div align="center">
                                         
                                      
                                         <button class="btn-success" align="center">Guardar</button>
                                            <button class="btn-secundary">Limpiar</button>
                                       
                                            </div> 
                                        </form>
                                  




                                </div>
                            </div>
                        </div>
                        </div>

 </div>
                        </div>

@stop
