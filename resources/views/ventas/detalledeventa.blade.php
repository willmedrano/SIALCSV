@extends('probandos')

@section('content')
<style>
.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
thead {
     background: #ffffcc;
     border:1;

}
thead {
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
                                $total=$total+($aux3->preciov);
                            ?>
                            @endforeach
                

 <div class="title-block">
                    <span class="col-md-1  text-center">
                        <i class="fa fa-shopping-cart  bigicon"></i>
                     </span>
                        <h1 class="title">Detalle de Compras</h1>
                        <p class="title-description">Detalle de Compras </p> 
                         
                           
                    </div>
                        
                    <section >


                            
                                <button type="submit"  class="btn btn-primary btn-lg">Imprimir</button>
                            
                             <div class="row table-responsive">
                            
                                <div class="card table-responsive">
                                    <div class="card-block table-responsive">
                                        <div class="card-title-block table-responsive">
                                           <div class="card-title-block">
                                           <div class="form-group" align="right">
                                                  <span class="col-md-1 col-md-offset-7 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                                               <div class="col-xs-4">

                                                <input id="filtrar" name="name" type="text" class="form-control">
                                                </div>
                                                   </div> 


                                                   </div> 
                                                    </div>
                                        <section class="example">
                                             <table class="table  table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead valign="bottom" align="right" >
                                        <tr  class="warning" align="center">
                                            <th align="center" colspan="1" ># venta</th>
                                            <th align="center" >producto</th>
                                            <th align="center" >Fecha</th>
                                            <th align="center">cantidad</th>

                                            <th align="center" >precio</th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="buscar">

                                                
                                                    @foreach($pendiente as $comps)
                                                    <tr class="v">
                                                        
                                                        <th  scope="row" >compra #{{ $comps->idFact }}</th>
                                                        <td>{{ $comps->idProd}}</td>
                                                        
                                                        <td>{{ $comps->created_at}}</td>
                                                        <td>{{ $comps->cantidadv}}</td>
                                                        <td>{{ $comps->preciov}}</td>
                                                        
                                                        
                                                        
                                                       
                                                        
            
                                                                                                                
                                                       
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

