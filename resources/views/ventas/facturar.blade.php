@extends('probandos')

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


    
</style>

            <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                <?php $total=0;?>
                            @foreach($pendiente as $aux3)
                                <?php 
                                $total=$total+($aux3->descompra3);
                            ?>
                            @endforeach


<!--Inicio de modal -->
                <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
                                
                                 <div class="modal-dialog" role="document">
                                    
                                    <div class="modal-content">
                                        
                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
                                            <h4 class="modal-title" id="gridModalLabel">Realizar Factura</h4>
                                        
                                        </div>
                                        
                                        <div class="modal-body">
                                            
                                            <div class="container-fluid bd-example-row">
                                            
                                            {!! Form::open(['route'=>'aux5.store','method'=>'POST','class'=>'form-horizontal','id'=>'frm2','name'=>'frm2']) !!}
                                                
                                                <fieldset>

                                                    <div class="form-group">
                            
                                                        <span class="col-md-2  text-center" ><label >codigo: </label></span>
                                                        
                                                        <div class="col-md-6">
                                                            
                                                            <input id="codE2" name="codE" type="text" placeholder="Correlativo de la factura" class="form-control" disabled="" value="{!!Auth::user()->idemp!!}">
                                                            <input type="hidden" name="codE" id="codE" value="{!!Auth::user()->idemp!!}">
                                
                                                        </div>

                                                    </div>   <br>


                                                    <div class="form-group">
                                                        
                                                        <span class="col-md-2  text-center" ><label >Nombre vendedor: </label></span>
                                                        
                                                        <div class="col-md-6">
                                                            @foreach($emp as $emp1)
                                                            @if($emp1->id== 1 )
                                                                <input id="" name="nomP" type="text" placeholder="Nombre del Cliente" class="form-control" disabled="" value="{{ $emp1->nomEmp }}">
                                                                <input type="hidden" name="nomP" id="nomP" value="{{ $emp1->nomEmp }}">
                                
                                                            @endif
                                                            @endforeach
                                                            
                                                        </div>

                                                    </div>
<br>
<br>
                                                    <div class="form-group">
                            
                                                        <span class="col-md-2  text-center">
                                                        <label >Nombre Cliente: </label></span>
                            
                                                        <div class="col-md-6">

                                                            <input id="cli" name="cli" type="text" placeholder="Nombre del cliente" class="form-control" required="">

                                                        
                                                        </div>

                                                    </div>
                                                    <br><br>
                                                    <div class="form-group">
                            
                                                        <span class="col-md-2  text-center">
                                                        <label >Fecha: </label></span>
                            
                                                        <div class="col-md-5">

                                                            <input id="fecha2" name="fecha2" type="date" placeholder="% de descuento" class="form-control" disabled value="<?php echo dameFecha(date("Y-m-d"),0);?>"> 

                                                            <input type="hidden" name="fecha" id="fecha" value="<?php echo dameFecha(date("Y-m-d"),0);?>">  
                                                        
                                                        </div>

                                                    </div>
                        <br><br>
                                                    <div class="form-group">
                                                    
                                                        <span class="col-md-2  text-center"><label >Sub-Total: </label></span>
                                                    
                                                        <div class="col-xs-5">
                                                            
                                                             <input id="tipo" name="tipo" type="text" placeholder="sub-total" disabled class="form-control" value="<?php echo round(($total-($total*0.13)),2);
                                                            ?>">

                                                        
                                                        </div>
                                                    
                                                    </div>
                                                    <br><br>
                                                    <div class="form-group">
                            
                                                        <span class="col-md-2  text-center"><label >Iva: </label></span>
                            
                                                        <div class="col-md-3">
                                                            
                                                            <input id="iva2" name="iva2" type="text" placeholder="IVA agregado " disabled class="form-control" value="<?php echo round(($total*0.13),2);
                                                            ?>">
                                                            <input type="hidden" name="iva" id="iva" value="<?php echo round(($total*0.13),2);
                                                            ?>">

                                                        </div>
                                                        
                                                        <span class="col-md-5  text-center"  ><i class="fa fa-pencil-square-o fa-3x fa-fw bigicon"></i></span>
                                                    
                                                    </div>
                                                    <br><br>
                                                    <div class="form-group">
                            
                                                        <span class="col-md-2  text-center"><label >Total: </label></span>
                                                        
                                                        <div class="col-xs-5">

                                                            <input id="total2" name="total2" type="text" placeholder="Total a pagar" class="form-control" disabled value="<?php echo $total;
                                                            ?>">
                                                            <input type="hidden" name="total" id="total" value="<?php echo $total; ?>">
                                                        
                                                        </div>

                                                    </div>
                                                        <br><br>
                                                    <div class="form-group">
                                                        
                                                        <span class="col-md-2 text-center"><label >Descripción:</label></span>
                            
                                                        <div class="col-md-7">
                                                            
                                                            <textarea rows="2" class="form-control" id="des" name="des" placeholder="Agregue la descripcion de la venta" rows="7" required=""></textarea>
                                                        
                                                         </div>

                                                    </div>    
                                                
                                                </fieldset>
                                             
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            
                                            <button type="submit" class="btn btn-primary">Facturar</button>
                                        
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
<!--fin de modal -->
                    <div class="title-block ">
                        <h1 class="title">
    

        Facturacion Pendiente
    </h1>


                        <p class="title-description"> Ventas  </p>
                    </div>


                        
                    <section class="section table-responsive">


                            
                                
                            
                            
                        <div class="row table-responsive">
                            
                                <div class="card table-responsive">
                                    <div class="card-block table-responsive">
                                        <div class="card-title-block table-responsive">
                                            <h3 class="title">
                            
                        </h3> </div>
                                        <section class="example">
                                            <table class="table  table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead valign="bottom" align="right" >
                                        <tr  class="warning" align="center">
                                            <th align="center" colspan="1" ># venta</th>
                                            <th align="center" >producto</th>
                                            <th align="center">cantidad en Cajas</th>
                                            <th align="center" >Cantidad en unidades</th>
                                            <th align="center" >precio</th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="buscar">

                                                
                                                    @foreach($pendiente as $comps)
                                                    <tr class="v">
                                                        
                                                        <th  scope="row" >compra #{{ $comps->id }}</th>
                                                        <td>{{ $comps->nomProd}}</td>
                                                        <td>{{ $comps->cancompra3}}</td>
                                                        <td>{{ $comps->preciocomp3}}</td>

                                                        <td>{{ $comps->descompra3}}</td>

                                                        
                                                       
                                                        
                                                        
                                                       
                                                        
            
                                                                                                                
                                                       
                                                    </tr>
                                                    
                                                  
                                                    
                                                    

                                                    
                                                      @endforeach
                                                </tbody>
                                                
                                                <tfoot>
                                           <tr align="center">
                                                       
                                                        <td colspan="4"><p style="font-weight: bold;">Total</p></td>
                                                        <td colspan="1" ><p style="font-weight: bold;">$ <?php echo $total ?></p></td>
                                                        <td colspan="1" align="left"></td>

                                                    </tr>
                                  </tfoot>
                                                     </table>
                                            <div align="center"> <button type="submit"  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#gridSystemModal">Facturar</button> </div>
                                        </section>
                                    </div>
                                
                            </div>
                           </div>
                           </section>
                           </article>

                          
                           

@stop()
<?php 
$time=time();
    
    function dameFecha($fecha,$dia){
        list($year,$mon,$day)=explode('-',$fecha);
        return date('Y-m-d',mktime(0,0,0,$mon,$day+$dia,$year));    
    }
   $total=0; 


  
?>