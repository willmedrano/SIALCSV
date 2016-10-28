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


@foreach ($paqs as $cat)
<div  id="Edit{{$cat->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel">Modificar Tipo de paquete</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
      {!!Form::model($cat,['method'=>'PATCH','route'=>['paqueteregistro.update',$cat->id]])!!}
      <fieldset>
      <input type="hidden" name="hi2" value="1">
                        <br>
                        <div class="form-group">
                            
                            <div class="col-md-6">
                                <input disabled id="id" name="id" type="hidden" placeholder="codigo de ese paquete" class="form-control" value="{{ $cat->cod }}">
                                
                            </div>

                            
                            
                        </div>                
                      
                        <div class="form-group">
                            <span class="col-md-2  text-center" ><label >Nombre: </label></span>
                            <div class="col-md-6">
                                <input id="nompaquete" name="nompaquete" type="text" placeholder="Nombre del Paquete" class="form-control" value="{{ $cat->nompaquete }}">
                                
                            </div>

                            
                            
                        </div>
                      <br>
                      <br>
                        <div class="form-group">
                             <span class="col-md-2  text-center" ><label >Precio: </label></span>
                            <div class="col-md-6">
                                <input id="preciop" name="preciop" type="text" placeholder="precio del paquete" class="form-control" value="{{ $cat->preciop }}">
                            </div>
                        </div>
                        
                    </fieldset>
                    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
     
      {!!Form::close()!!}     
        </div>
      </div>
      
    </div>
  </div>
</div>


@endforeach

                        

             





                    <div class="title-block ">
                        <h1 class="title">
    

        Tabla de Tipo de paquetes
    </h1>


                        <p class="title-description"> Tipo de paquetes  </p>
                    </div>


                        
                    <section class="section table-responsive">


                            
                                <button type="submit"  class="btn btn-primary btn-lg">Imprimir</button>
                            
                            
                        <div class="row table-responsive">
                            
                                <div class="card table-responsive">
                                    <div class="card-block table-responsive">
                                        <div class="card-title-block table-responsive">
                                            <h3 class="title">
                            
                        </h3> </div>
                                        <section class="example">
                                            <table class="table table-bordered table-hover" style="width:100%" >
                                                <thead align="center">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nombre</th>
                                                        <th>Precio del apaquete</th> 
                                                        <th colspan="1" rowspan="">Accion</th>
                                                     
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody id="hola">
                                                <?php $cont=0;?>
                                                    @foreach($paqs as $paquete)
                                                

                                                    <tr>
                                                    <td><?php $cont++; echo $cont;?></td>
                                                        <td>{{ $paquete->nompaquete }}</td>
                                                        <td>{{ $paquete->preciop }}</td>
                                                         
                                                        <td><a href="#"   class="btn btn-info btn-sm" data-id="{{ $paquete->id }}" data-toggle="modal" data-target="#Edit{{ $paquete->id }}">Modificar</a>



                                                        </td>
                                                        
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
