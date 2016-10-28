
@extends('probandos')

@section('content')
<style>.bigicon {
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
<h4 class="modal-title" id="gridModalLabel">Modificar datos del contrato</h4>
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
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Escuela: </label></span></td>
                    <td colspan="3" align="center" > <select class="form-control">
                                                        <option>Seleccione la escuela</option>
                                                        <option>escuela 1</option>
                                                        <option>escuela 2</option>   
                                                    </select> 
                    <br></td>

                    <td></td>
                    <td></td>
                    <td></td>
                
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Productos: </label></span></td>
                    <td colspan="2" align="center" > <select class="form-control">
                                                        <option>Seleccione un productos</option>
                                                        <option>cajas 1</option>
                                                        <option>caja 2</option>   
                                                    </select> 
                                                    <br></td>
                    <td colspan="2" rowspan="4" align="center"><span align="center">
                        <i style="font-size: 150px;" class="fa fa-pencil-square-o fa-3x fa-fw bigicon" align="center"></i>
                    </span></td>
                    <td></td>
                    <td></td>
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Fecha de entega: </label></span></td>
                    <td colspan="2" align="center"> <input id="email" name="email" type="date" placeholder="Fecha de Nacimiento " class="form-control"><br></td>
                    <td></td>
                    <td></td>
                    <td></td>
                     </tr>
             
                <tr>
                   <td align="right" nowrap="nowrap"> <span class="text-center" ><label >cantidad: </label></span></td>
                    <td colspan="2"> <input id="email" name="email" type="text" placeholder="" class="form-control"><br>
                    </td>
                    <td></td>
                    <td></td>
                    
                    
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"> <span class="text-center" ><label >total a pagar: </label></span></td>
                    <td colspan="2"> <input id="email" name="email" type="text" placeholder="" class="form-control"></td>
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
    

        Tabla de Contratos
    </h1>


                        <p class="title-description"> Contratos  </p>
                    </div>


                        
                    <section class="section">


                            
                                <button type="submit"  class="btn btn-primary btn-lg">Imprimir</button>
                            
                            
                        <div class="row">
                            
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                          <div class="form-group" align="right">
                                                  <span class="col-md-1 col-md-offset-7 text-center"><i class="fa fa-user bigicon icon_nav"></i>Buscar</span>
                                               <div class="col-xs-4">

                                                <input id="filtrar" name="name" type="text" class="form-control">
                                                </div>
                                                   </div>
                                          </div>
                                        <section class="example">
                                            <table class="table table-bordered table-hover" style="width:100%" >
                                                <thead align="center">
                                                    <tr>
                                                        <th>contrato</th>
                                                        <th>Escuela</th>
                                                        <th>Productos</th>
                                                        <th>Fecha de entrega</th>
                                                        <th>Pago</th>
                                                      
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody class="buscar">

                                                    <?php $c=0; ?>
                                                @foreach($contr as $cons)
                                                
                                                    <?php $c++;?>
                                                    <tr>
                                                       <td>contrato #<?php echo $c;?></td>
                                                        <td>{{ $cons->nomesc }}</td>
                                                        <td>{{ $cons->nomProd }}</td>
                                        <?php $date = new DateTime($cons->fechafcon); ?>
                                        <td><?php  echo $date->format('d/m/Y'); ?></td>
                                                        
                                                    <td>{{ $cons->montocon}}</td>  
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
    <!--{!!Html::script('js/scriptpersanalizado.js')!!}-->
    {!!Html::script('js/buscaresc.js')!!}
  @endsection

