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


                    <div class="title-block ">
                        <h1 class="title">
    

        Inventario Disponible
    </h1>


                        <p class="title-description"> Productos  </p>
                    </div>


                        
                    <section class="section table-responsive">


                            
                                 <a href="/reporte4"> <input type="button" value="imprimir" class="btn btn-primary btn-lg"/></a>.
                            
                            
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
                                                    <tr>
                                                        <th>Codigo</th>
                                                        <th>Nombre</th>
                                                        <th>Marca</th>
                                                        
                                                        <th>Costo Promedio</th>
                                                        <th>Cajas Disponibles</th>
                                                        <th>Precio de Caja</th>
                                                        <th>Unidades Disponibles</th>
                                                        <th>Precio de venta</th>
                                                        <th>Descripcion</th>
                                                        
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody class="buscar">

                                                    
                                                    @foreach($lotes as $pro)
                                                    <tr>
                                                        <th scope="row" >{{ $pro->cod }}</th>
                                                        <td>{{ $pro->nomProd }}</td>
                                                        <td>{{ $pro->marca }}</td>
                                                        <td> $
                                                            <?php
                                                            $a=$pro->cPromedio;
                                                            echo round($a,2);
                                                            ?>
                                                        </td>
                                                        <td><?php
                                                            $a=($pro->canlote/$pro->uniCaja);
                                                            echo floor($a);
                                                            ?></td>
                                                        <td> $ <?php
                                                            $a=((($pro->cPromedio*($pro->gCaja/100))+$pro->cPromedio));
                                                            echo round($a, 2);
                                                            ?>
                                                                
                                                        </td>
                                                        

                                                        <td>{{ $pro->canlote }}</td>
                                                        <td> $ 
                                                           <?php
                                                            $a=((($pro->cPromedio/$pro->uniCaja)*($pro->gUni/100)))+($pro->cPromedio/$pro->uniCaja);
                                                            echo round($a,2);
                                                            ?>
                                                        </td>
                                                        
                                                        
                                                        
                                                        
                                                        <td>{{ $pro->desc }}</td>
                                                        
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

                          
                           

@stop()
@section('scripts')
    <!--{!!Html::script('js/scriptpersanalizado.js')!!}-->
    {!!Html::script('js/buscaresc.js')!!}
  @endsection