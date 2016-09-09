@extends('plan')

@section('content')
  
<div class="content-top">
        
            
            <div class="col-sm-12 col-sm-offset-3 col-md-10 col-md-offset-3 main">        


               
                        <div class="row placeholders">          
          <div class="col-sm-7">           
      
        <div class="panel panel-primary">
          <div class="panel-heading">
                                    <div class="title-block" align="center">
                                        <h3 class="title"> Formulario de Contrato</h3> 
                                     </div>




                                <div class="card card-block sameheight-item" style="height: 355px;">
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

                                        
                                                <label class="control-label">Monto: </label> 
                                                <input type="text" class="form-control underlined" placeholder="$ 0.00"> 
                                       

                                       
                                            <button class="btn-success" align="center">Guardar</button>
                                            <button class="btn-secundary">Limpiar</button>
                                        </form>
                                  




                                </div>
                            </div>
                        </div>
                        </div>

 </div>
                        </div>

@stop
