@extends('probandos')
<?php $message=Session::get('message')?>

@if($message=='update')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong> Sea Actualizado con exito el registro</strong>
</div>
@endif
@section('content')
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
    
</style>



            <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">





                    <div class="title-block">
                     <span class="col-md-1  text-center">
         <i class="fa fa-truck bigicon"></i>
          </span>

                        <h1 class="title">
    

        Tabla Pago a Empleados
    </h1>


                        <p class="title-description"> Empleados  </p>
                    </div>


                        
                    <section class="section">


                            
                                <button type="submit"  class="btn btn-primary btn-lg">Imprimir</button>
                            
                            
                        <div class="row">
                            
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                     <div class="card-title-block">
                                           <div class="form-group" align="right">
                                                  <span class="col-md-1 col-md-offset-7 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                                               <div class="col-xs-4">

                                                <input  id="filtrar" name="name" type="text" class="form-control">
                                                </div>
                                                   </div> 


                                                   </div> </div>
                                        <section class="example">
                                            <table class="table table-bordered table-hover" style="width:100%" >
                                                <thead align="center">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nombre</th>
                                                          <th>Salario diario</th>
                                                          <th>dias pagado</th>
                                                          <th>Sub-Total</th>
                                                          <th>Bono Extra</th>
                                                        <th>Total pagado</th>
                                                        <th>Fecha</th>
                                                        
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody id="datosprove" class="buscar">

                                                <?php $con=0; ?>
                                                @foreach($pa as $prov)
                                                
                                                    <?php $con++;?>
                                                    <tr>
                                                       <td>  <?php echo $con;?></td>
                                                        <td>{{ $prov->nomEmp }}</td>
                                                        
                                                        <td>{{ $prov->sueldoEmp }}</td>
                                                        <td>{{ $prov->dias }}</td>
                                                        <td>
                                                          <?php 
                                                            $a=($prov->dias*$prov->sueldoEmp);
                                                            echo round($a,2);
                                                          ?>
                                                        </td>
                                                        <td>
                                                          <?php 
                                                            $a=($prov->pagos)-($prov->dias*$prov->sueldoEmp);
                                                            echo round($a,2);
                                                          ?>
                                                        </td>
                                                        <td>{{ $prov->pagos }}</td>
                                                        <td>{{ $prov->fechpago }}</td>
                                                        
                                                       
                                                       
                                                         
                                                       
                                                    
                                                   </tr>    
                                                        
                                                @endforeach  
                                              
                                                      
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
    {!!Html::script('js/buscaresc.js')!!}
  @endsection
 
