
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






 <div class="title-block">
                    <span class="col-md-1  text-center">
                        <i class="fa fa-shopping-cart  bigicon"></i>
                     </span>
                        <h1 class="title">Entradas y Salidas</h1>
                        <p class="title-description">Tabla Entradas y Salidas </p> 
                         
                           
                    </div>
                        
                    <section >


                            
                                 <a href="/reporte7"> <input type="button" value="imprimir" class="btn btn-primary btn-lg"/></a>.
                            
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
                                             <table class="table table-bordered table-hover" style="width:100%" >
                                                <thead align="center">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Detalle</th>
                                                        
                                                        
                                                        
                                                        <th>Fecha</th>
                                                        <th>Ingreso </th>
                                                        
                                                        <th>Egreso</th>

                                                        
                                                        
                                                         
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody class="buscar">

                                                    <?php 
                                                      $in=0;
                                                      $eg=0;
                                                    ?>
                                                    @foreach($comp as $comps)
                                                    <tr class="v">
                                                        
                                                        <th  scope="row" >#{{ $comps->id }}</th>
                                                        <td> {{ $comps->detalle}}</td>
                                                        
                                                        <?php $date = new DateTime($comps->fecha); ?>
                                                        <td><?php  echo $date->format('d/m/Y'); ?></td>
                                                        <?php 
                                                            $in=$in+$comps->ingreso;
                                                            $eg=$eg+$comps->egreso;
                                                         ?>
                                                         <td>$ {{ $comps->ingreso}}</td>
                                                        <td>$ {{ $comps->egreso}}</td>
                                                      
                                                      

                                                        

                                                    </tr>
                                                    
                                                  
                                                    <tr align="center">
                                                       
                                                        
                                                    

                                                    
                                                      @endforeach
                                                      <td colspan="4"><p style="font-weight: bold;">Total</p></td>
                                                        <td colspan="1" ><p style="font-weight: bold;">$ <?php echo round(($in-$eg),2); ?></p></td>
                                                        <td colspan="1" align="left"></td>

                                                    </tr>
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

