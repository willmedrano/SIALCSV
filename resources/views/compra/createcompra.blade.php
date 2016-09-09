@extends('plan')

@section('content')
  
<div class="sidebar-overlay" id="sidebar-overlay"></div>
                
                    <div class="title-block">
                        <h3 class="title">Compras</h3>
                        <p class="title-description"> Registro de Compras </p>
                    </div>
            <!--<div class="subtitle-block">
                        <h3 class="subtitle">
        Formulario de Producto
    </h3> </div>-->
               
                        <div class="row sameheight-container">
                            <div >
                                <div class="card card-block sameheight-item" >
                                    <div class="title-block" align="center">
                                        <h3 class="title"> Formulario de Compras</h3> 
                                     </div>




                                <div class="card card-block sameheight-item" style="height: 335px;">
                                    <form role="form">
                                      <div class="form-group">
                                                <label class="control-label">Monto: </label> 
                                                <input type="text" class="form-control underlined" placeholder="$ 0.00"> 
                                        </div>
                                        <div class="form-group"> 
                                             <label class="control-label">Tipo de pago: </label>
                                            <select name="idtipopgo" class="form-control">
                                              <option selected=""> seleccione una opcion</option>
                                                <option> contado</option>
                                                <option> credito</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">fecha de compra: </label> 
                                          
                                            <input type="date" id="fecha" class="form-control underlined">

                                        </div>
                                      
                                         <div class="col-sm-6">
                                        
                                             <label class="control-label">Proveedor: </label>
                                            <select name="idtipopgo" class="form-control">
                                             
                                              <option selected=""> seleccione una opcion un poveedor</option> 
                                                <option> jose</option>
                                                <option> Mario</option>
                                                
                                            </select>  <div align="left"> <button class="btn-success">+</button></div>
                                            </div> 
                                           
                                           
                                        </div>
                                        <div class="form-group">
                                            <button class="btn-success">Guardar</button>
                                            <button class="btn-secundary">Limpiar</button>
                                        </form>
                                    </div>




                                </div>
                            </div>
                        </div>










    <!-- Core CSS - Include with every page -->
    {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
     {!!Html::style('assets/css/style.css')!!}  
      {!!Html::style('ssets/css/main-style.css')!!}  

    <!-- Page-Level CSS -->
    {!!Html::style('assets/plugins/dataTables/dataTables.bootstrap.css')!!}  
   

 <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabla de productos que los ofrece el proveedor
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Numero</th>
                                            <th>Nombre</th>
                                            <th>Marca</th>
                                            <th>Tipo</th>
                                            <th>Precio</th>
                                            <th>Descuento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
             <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
   {!!Html::script('assets/plugins/jquery-1.10.2.js')!!}  
     {!!Html::script('assets/plugins/bootstrap/bootstrap.min.js')!!}  
     {!!Html::script('assets/plugins/metisMenu/jquery.metisMenu.js')!!}  
    {!!Html::script('assets/plugins/pace/pace.js')!!}  
    {!!Html::script('assets/scripts/siminta.js')!!}  
    <!-- Page-Level Plugin Scripts-->
     {!!Html::script('assets/plugins/dataTables/jquery.dataTables.js')!!}  
     {!!Html::script('assets/plugins/dataTables/dataTables.bootstrap.js')!!}  
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
@stop
