
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

              <?php $message=Session::get('message')?>

                @if($message=='update')
                  <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong> Sea Actualizado con exito el registro</strong>
                  </div>
                @endif


@foreach ($comp as $cat2)
<div id="gridSystemModal2{{$cat2->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header alert-warning" bgcolor="blue">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel3"> REALIZAR ENTREGA</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
           {!!Form::model($cat2,['method'=>'PATCH','route'=>['contrato.update',$cat2->id]])!!}
              <label for="">¿Seguro que desea cambiar el estado del Contrato?</label>
              <input type="hidden" name="hi" value="{{ $cat2->estado }}">
              <input type="hidden" name="hi2" value="3">
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </div>
          {!!Form::close()!!}
        </div>
      </div>
      
    </div>
  </div>
</div>
@endforeach ()


 <div class="title-block">
                    <span class="col-md-1  text-center">
                        <i class="fa fa-archive bigicon icon_nav bigicon"></i>
                     </span>
                        <h1 class="title">Contratos Realizado o Pendientes</h1>
                        <p class="title-description">Tabla de Contratos </p> 
                         
                           
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
                                             <table class="table table-bordered table-hover" style="width:100%" >
                                                <thead align="center">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Escuela </th>
                                                        <th>Fecha del Contrato</th>
                                                        <th>Fecha de Entrega</th>
                                                        <th>Total</th>
                                                        <th>Descripción</th>
                                                        <th>Acción</th>
                                                        <th colspan="1" rowspan="">Estado</th>
                                                         
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody class="buscar">

                                                    <?php $con=0;?>
                                                    @foreach($comp as $comps)
                                                    <tr class="v">
                                                        
                                                        <th  scope="row" >#{{ $comps->id }}</th>
                                                        <td>{{ $comps->nomesc}}

                                                      </td>
                                                      <?php $date = new DateTime($comps->fechaf); ?>
                                                        <td><?php  echo $date->format('d/m/Y'); ?></td>

                                                        
                                                        
                                                        
                                                        <?php $date = new DateTime($comps->fechae); ?>
                                                        <td><?php  echo $date->format('d/m/Y'); ?></td>
                                                        
                                                        <td> $ {{ $comps->total}}</td>
                                                        <td> {{ $comps->detalle}}</td>
                                                        
                                                        <td>
                                    {!!Form::open(['route'=>['contrato.show',$comps->id],'method'=>'GET'])!!}
                                                        <input type="submit" name="" value="Detalle"   class="btn btn-info btn-sm active " >
                                                        {!!Form::close()!!}   

                                                        </td>
                                                        @if($comps->estado==true)
                                                            <td><button type="submit"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#gridSystemModal2{{$comps->id}}">Pendiente</button></td>
                                                        @endif

                                                        @if($comps->estado==false)
                                                            <td>Entregado</td>
                                                        @endif

                                        
                                
                                                                                                                
                                                       
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

