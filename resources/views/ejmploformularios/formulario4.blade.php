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



                                <div class="card card-block sameheight-item" style="height: 445px;">
                                 <div class="panel-body">
                                    <form >
                                     
                                        
                                             <label class="control-label">Escuelas: </label>
                                            <select name="idtipopgo" class="form-control">
                                              <option selected="">seleccione el Centro Escolar</option>
                                                <option>escuela 1 </option>
                                                <option>escuela 2 </option>
                                                
                                            </select>
                                     
                                        
                                            <label class="control-label">fecha de Inicia: </label> 
                                          
                                            <input type="date" id="fecha" class="form-control underlined">

                                       
                                         
                                            <label class="control-label">fecha de Finaliza: </label> 
                                          
                                            <input type="date" id="fecha" class="form-control underlined">

 
                                        
                                                <div class="form-group has-success"> <label class="control-label" for="inputSuccess1">Monto:</label> <input type="text" class="form-control" id="inputSuccess1"> <span class="has-success">Solo numeros.</span> </div>
                                       

                                       
                                            <button class="btn-block btn-sm btn-success" align="center">Guardar</button>
                                            <button class="btn-block btn-sm btn-danger">Limpiar</button>
                                        </form>
                                  




                                </div>
                            </div>
                        </div>
                        </div>

 </div>
                        

@stop
