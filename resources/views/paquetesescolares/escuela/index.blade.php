
@extends('probandos')

@section('content')
@include('paquetesescolares.escuela..modal')
 {!! Html::script('js/scriptpersanalizado.js') !!}
<script language="javascript">
  function verificar(){
    if(document.getElementById('carnet').value=="" || 
    document.getElementById('nombre').value=="" || 
    document.getElementById('apellido').value=="" 
    ){
      
      alertaError("Uy...","Campos sin llenar","warning");
      }
    else{
        document.getElementById('bandera').value="add";
        document.frmexpediente.submit();
      }
      
    }
    
function alertaExito(titulo,texto,tipo){
  swal(titulo,texto,tipo);
}
function alertaError(titulo,texto,tipo){
  sweetAlert(titulo, texto, tipo);
}

</script>
   <!-- esto es para el uso de los alertas -->
  <script src="../alertas/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="../alertas/dist/sweetalert.css">           
  

@if(Session::has('message'))
 <!--  <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Exito!!</strong> Proveedor Creado
</div>-->
<?php 
          echo "<script language='javascript'>";
          echo "alertaExito('Registro modificado', 'Guardado', 'success');";
          echo "</script>";
      ?>
@endif

<style>
.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
thead{
     background: #ffffcc;
     border:1;

}

h2,h1,span
{
    color: #36A0FF;

}

.gris{
    background:#8c8c8c; 
    color:white;
}
.quitarborder{
 
    color:white;
}

.formatoTabla {
    
    font-size: 16px;
    text-align: center;
   }
   input[type="date"] {
  line-height: 34px;
  font-size: 16px;
}
    
</style>



            <div class="sidebar-overlay" id="sidebar-overlay"></div>

                <article class="content static-tables-page">

 <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Escuela seaActualizado Correctamente.</strong> 

</div>



                    <div class="title-block">
                     <span class="col-md-1  text-center">
         <i class="fa fa-home bigicon"></i>
          </span>

                        <h1 class="title">
    

        Tabla de Escuelas
    </h1>


                        <p class="title-description"> Escuelas  </p>
                    </div>


                        
                    <section class="section">


                            
                                <button type="submit"  class="btn btn-primary btn-lg">Imprimir</button>
                            
                            
                        <div class="row">
                            
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                           <div class="form-group" align="right">
                                                  <span class="col-md-1 col-md-offset-7 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                                               <div class="col-xs-4">

                                                <input id="filtrar" name="name" type="text" class="form-control">
                                                </div>
                                                   </div> </div>
                                        <section class="example">
                                        <br>
                                            <table class="table table-bordered table-hover" style="width:100%" >
                                                <thead align="center">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Escuela</th>
                                                        <th>Director</th>
                                                        <th>Telefono</th>
                                                        <th>Dirreccion</th>
                                                        <th colspan="2" class="formatoTabla">Acciones</th>
                                                       
                                                    </tr>
                                                </thead>
                                                
                                                <tbody id="datos" class="buscar"> 
                                          
                                                            
                                                </tbody>
                                                
                                            </table>
                                        </section>
                                    </div>
                                
                            </div>
                           </div>
                           </section>
                      
                           </article>

@endsection
  @section('scripts')
    {!!Html::script('js/scriptpersanalizado.js')!!}
    {!!Html::script('js/buscaresc.js')!!}
  @endsection




