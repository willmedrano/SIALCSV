@extends('plan')

@section('content')
  
<div class="sidebar-overlay" id="sidebar-overlay"></div>
                
                    <div class="title-block">
                        <h3 class="title">Escuela </h3>
                        <p class="title-description"> Registro del Centro Escolar </p>
                    </div>
            <!--<div class="subtitle-block">
                        <h3 class="subtitle">
        Formulario de Producto
    </h3> </div>-->
               
                        <div class="row sameheight-container">
                            <div >
                                <div class="card card-block sameheight-item" >
                                    <div class="title-block" align="center">
                                        <h3 class="title"> Formulario de Escuela</h3> 
                                     </div>

                                <div class="card card-block sameheight-item" style="height: 335px;">
                                    <form role="form">
                                      <div class="form-group">
                                                <label class="control-label">Nombre del CE: </label> 
                                                <input type="text" class="form-control underlined" placeholder="Ingrese el nombre del Centro Escolar"> 
                                        </div>
                                         <div class="form-group">
                                                <label class="control-label">Nombre del director: </label> 
                                                <input type="text" class="form-control underlined" placeholder="Ingrese el nombre del director"> 
                                        </div>
                                         <div class="form-group">
                                                <label class="control-label">Telefono: </label> 
                                                <input type="text" class="form-control underlined" placeholder="0000-0000"> 
                                        </div>
                                         <div class="form-group">
                                                <label class="control-label">Direccion: </label> 
                                                <input type="text" class="form-control underlined" placeholder="Ingrese la direccion"> 
                                        </div>
                              
                                        <div class="form-group">
                                            <button class="btn-success">Guardar</button>
                                            <button class="btn-secundary">Limpiar</button>
                                        </form>
                                    </div>




                                </div>
                            </div>
                        </div>










   
    
@stop
