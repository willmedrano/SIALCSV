@extends('probandos')

@section('content')

       <!-- Core CSS - Include with every page -->
    
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


<!--Inicio de modal -->
                <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;" >&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel">Registrar pago de credito</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
 
          <form class="form-horizontal" method="post">
                    <fieldset>
                           <table class="quitarborder" style="width:100%" >
      
          
           <thead>
               <tr>
                   <th></th>
                   <th ></th>
                    <th ></th>
                    <th ></th>
                    <th ></th>
                   <th colspan="2"></th>
                   
               </tr>
           </thead>
           <tbody>
               <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Compra: </label></span></td>
                    <td colspan="3" align="center" ><input id="nomP" name="nomP" type="text" placeholder="Ingrese la compra" class="form-control" >
                    <br></td>

                    <td></td>
                    <td></td>
                    <td></td>
                
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >couta: </label></span></td>
                    <td colspan="2" align="center" ><input id="nomP" name="nomP" type="text" placeholder="Nombre del director" class="form-control"><br></td>
                    <td colspan="2" rowspan="2" align="center"><span align="center">
                        <i style="font-size: 150px;" class=" fa fa-money bigicon" align="center"></i>
                    </span></td>
                    <td></td>
                    <td></td>
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Fecha: </label></span></td>
                    <td colspan="2" align="center"><input id="tipo" name="tipo" type="date" placeholder="" class="form-control"><span class="has-success">Fecha del siguiente cuota.</span></td>
                    <td></td>
                    <td></td>
                    <td></td>
                     </tr>
             
                <tr>
                   <td align="right" nowrap="nowrap"> <span class="text-center" ><label >monto: </label></span></td>
                    <td colspan="2" align="center" ><input id="nomP" name="nomP" type="text" placeholder="INgrese el monto a pagar" class="form-control"><br></td>
                    <td></td>
                    <td></td>
                    
                    
               </tr>
           </tbody>
       </table>
                        
                    </fieldset>
                </form>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!--fin de modal -->


                    <div class="title-block">
                     <span class="col-md-1  text-center">
         <i class="fa fa-home bigicon"></i>
          </span>

                        <h1 class="title">
    

        Tabla de Compras apagar
    </h1>


                        <p class="title-description"> Compras apagar </p>
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

                                                <input id="fname" name="name" type="text" class="form-control">
                                                </div>
                                                   </div> </div>
                                        <div class="table-responsive" align="center" >
                             <br>
                                            <table class="table table-bordered table-hover" style="width:100%" >

                                    <thead valign="bottom" align="right" >
                                        <tr  class="warning formatoTabla">
                                            <th align="center" class="">compras</th>
                                            <th align="center" width="100px">couta</th>
                                            <th align="center" >fecha de pago credito</th>
                                            <th align="center" >precio</th>
                                            <th align="center" >monto</th>
                                            <th align="center" >Estado</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                          
                                        <tr align="center">
                                            <td>Lapiz #2</td>
                                            <td>4</td>
                                            <td>25/09/2016</td>
                                            <td>0.75</td>
                                            <td>20</td>
                                            <td><buttontype="submit"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#gridSystemModal">pagar</button></td>
                                            
                                        </tr>
                                         <?php $v=0; ?>
                                          @foreach($cuota as $aux2)
                                          <?php
                                           $v++;  
                                           $date = new DateTime($aux2->fechcouta);
                                          ?>
                                        <tr align="center">
                                            <td>{{ $v }}</td>
                                            <td>{{ $aux2->id}}</td>
                                            <td> <?php  echo $date->format('d/m/Y'); ?></td>
                                            <td>{{ $aux2->cuotas }}</td>
                                            <td>20</td>
                                            <td><buttontype="submit"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#gridSystemModal">pagar</button></td>
                                            
                                        </tr>
                                          @endforeach
                                    </tbody>
                                                     </table>
                                                            
                                        </div>
                                    </div>
                                
                            </div>
                           </div>
                           </section>
                           </article>
   
               






  
@stop