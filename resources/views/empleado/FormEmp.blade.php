@extends('probandos')

@section('content')
 <section class="section" >

 
  <div class="col-md-9">
<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content forms-page">
                    <div class="title-block">
                        <h3 class="title" align="center">
		Empleados
	</h3>
                        <p class="title-description" align="center" font-style="italic"> Registro de Empleados </p>
                    </div>
			<!--<div class="subtitle-block">
                        <h3 class="subtitle">
		Formulario de Producto
	</h3> </div>-->
                    <section class="section">
                        <div class="row sameheight-container">
                            <div >
                                <div class="card card-block sameheight-item" >
                                    <div class="title-block" align="center">
                                        <h3 class="title" >
						Formulario de Empleados
					</h3> </div>

                                    <form role="form" aling="center">
                                    <div class="row form-group">
                                        <div  class="col-xs-5 col-xs-offset+1">
                                        	<label class="control-label">Nombre:</label> 
                                        	<input type="text" class="form-control underlined" placeholder="Nombre"> 
                                        </div>

                                        <div class="col-xs-5 col-xs-offset-1">
                                        	<label class="control-label">Apellidos:</label> 
                                        	<input type="text" class="form-control underlined" placeholder="Apellidos"> 
                                            <br>
                                        </div>

                                        
                                        <div class="col-xs-5 col-xs-offset+1">
                                             <label class="control-label">Fecha de nacimiento:</label> 
                                             <input type="date" class="form-control underlined" placeholder="Fecha de nacimiento">
                                             </div>
                                                 </div>

                                               <div class="row form-group">
                                             <div class="col-xs-5 col-xs-offset+1">
                                            <label class="control-label">Dui:</label> 

                                            <input type="text" class="form-control underlined" placeholder="00000000-0">
                                        
                                          </div>

                                        <div class="col-xs-5 col-xs-offset-1">
                                            <label class="control-label">Nit:</label> 
                                            <input type="text" class="form-control underlined" placeholder="0000-000000-000-0"> 
                                        </div>

                                        <div class="col-xs-9 col-xs-offset+1"> 
                                           <label class="control-label">Direccion:</label> 
                                             <textarea rows="3" class="form-control underlined"></textarea>
                                         </div>
                                               </div>

                                          <div class="form-group">
                                            <label class="control-label">Telefono:</label> 
                                            <input type="text" class="form-control underlined" placeholder="0000-0000"> 
                                        </div>

                                         <div class="form-group">
                                         <label class="control-label">Sexo:</label>  
                                         <select class="form-control">
                                            <option>Masculino</option>
                                            <option>Femenino</option>
                                         </select> 
                                        </div>

                                         <div class="form-group"> 
                                        <label class="control-label">Correo Electronico</label>
                                              <input type="text" class="form-control underlined" placeholder="email@ejemplo.com"> 
                                        </div>


                                         <div class="form-group">
                                            <label class="control-label">Sueldo:</label> 
                                            <input type="text" class="form-control underlined" placeholder="$"> 
                                        </div>

                                       
                                       

                                         <div class="form-group">
                                         <label class="control-label">Cargo:</label>  
                                         <select class="form-control">
                                            <option>Administrador</option>
                                            <option>Vendedor</option>
                                             <option>Otro</option>
                                         </select> 
                                        </div>

                                          <div class="form-group"> <label class="control-label">Estado</label>
                                    <div> <label>
                                <input class="radio squared"  name="squared-radios" checked="checked" type="radio">
                                <span>Activo</span>
                            </label> <label>
                                <input class="radio squared"  name="squared-radios" type="radio">
                                <span>Desactivo</span>
                            </label> </div>
                                </div>

                                 </div>
                                        <div class="form-group">
                                             <label class="control-label">Fecha de contrato:</label> 
                                             <input type="date" class="form-control underlined" placeholder="Fecha de nacimiento"> </div>

                                        <div class="form-group">
                                            <label class="control-label">Input Password</label>
                                                 <input type="password" class="form-control underlined"> </div>
                                        
                                        
                                       
                                         
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </section>



         </article>




@stop