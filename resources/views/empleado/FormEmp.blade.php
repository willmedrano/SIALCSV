@extends('probandos')

@section('content')
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

<div class="sidebar-overlay" id="sidebar-overlay"></div>

                <article class="content forms-page" >
                  
                        

                    <div class="title-block">
                        <h2 class="title">Empleados</h2>
                        <p class="title-description"> Registro de Empleados </p> 
                         <div class="form-group">
                            <div class="col-md-12 text-center" align="right">

                           
                            

                                 </div>
                            </div>  
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
                                        <h3 class="title">
                        Formulario de Empleado
                    </h3> </div>


                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center" align="center">Empleado</legend>
                        <br>

                         <div  align="center">
                         <div>
                               <IMG SRC="#" WIDTH=120 HEIGHT=130 ALT="Obra de K. Haring">
                         </div>
                          <br>
         
                            <div class="col-xs-12" align="center">
                                <label>Subir Fotrografia </label>
                                <br>

                            </div>
                            
                               <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-folder-o bigicon icon_nav"></i></span>
                            <div class="col-xs-8">
                                <input id="lname" name="name" type="file"  class="form-control">
                            </div>
                            
                        </div>


                             
                            <br>
                        </div>

                         <br>
                          <br>
                           <br>
                        <div class="form-group">


                            
                           

                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon icon_nav" ></i></span>
                            <div class="col-xs-4">

                                <input id="fname" name="name" type="text" placeholder="Ingrese nombres" class="form-control">
                            </div>

                            <div class="col-xs-4" align="left">

                                <input id="fname" name="name" type="text" placeholder="Ingrese apellidos" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-credit-card bigicon icon_nav"></i></span>
                            <div class="col-xs-4">
                                <input id="lname" name="name" type="text" placeholder="DUI" class="form-control">
                            </div>
                            <div class="col-xs-4" align="left">

                                <input id="fname" name="name" type="text" placeholder="NIT" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>
                            <div class="col-xs-4">
                                <input id="email" name="email" type="date" placeholder="Fecha de Nacimiento " class="form-control">
                            </div>
                        </div>
                        <br>
                         <br>
                          

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-xs-4">
                                <input id="phone" name="phone" type="text" placeholder="Telefono 1" class="form-control">
                            </div>

                             <div class="col-xs-4" align="left">
                                <input id="phone" name="phone" type="text" placeholder="Telefono 2" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>

                      <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-users bigicon"></i></span>
                            <div class="form-group col-xs-4 "> 
                               <select class=" form-control">
                            <option>Masculino</option>
                            <option>Femenino</option>
                           
                        </select>
                        </div>
                        </div>
                        <br>
                        <br>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Direccion" rows="2"></textarea>
                            </div>
                        </div>
                        <br>
                        <br>
                          <br>
                        

                      <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-suitcase bigicon"></i></span>
                            <div class="form-group col-xs-4 "> 
                               <select class=" form-control">
                            <option>Administrador</option>
                            <option>Vendedor</option>
                            <option>Otros</option>
                           
                        </select>
                        </div>
                        </div>

                        <br>
                        <br>

                        <div class="form-group">

                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-dollar bigicon icon_nav" ></i></span>
                            <div class="col-xs-4">

                                <input id="fname" name="name" type="text" placeholder="Salario" class="form-control">
                            </div>
                            </div>
                            <br>

                            <br>
                        <div class="form-group">
                            <div class="col-md-12 text-center" align="center">
                                <button type="submit"  class="btn btn-primary btn-lg">Guardar</button>
                            </div>

                            
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
  
@stop