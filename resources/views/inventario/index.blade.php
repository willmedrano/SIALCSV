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



        <div id="gridSystemModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert-warning">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel3">Desactivar PRODUCTO</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
          <form action="">
              <label for="">¿Seguro que desea cambiar el estado del producto?</label>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- fin del modal 3-- >
<div id="gridSystemModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert-warning">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel2">Activar Producto</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
          <form action="">
              <label for="">¿Seguro que desea cambiar el estado del producto?</label>
              
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- fin del modal 2-- >
        


<!--Inicio de modal -->
                <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel">Modificar Producto</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
          <form class="form-horizontal" method="post">
                    <fieldset>
                        

                        <br>
                        <div class="form-group">
                            <span class="col-md-2  text-center" ><label >Nombre: </label></span>
                            <div class="col-md-6">
                                <input id="nomP" name="nomP" type="text" placeholder="Nombre del Producto" class="form-control" >
                                
                            </div>

                            
                            
                        </div>
<br>
                        <div class="form-group">
                            <span class="col-md-2  text-center"><label >Marca: </label></span>
                            <div class="col-md-5">
                                <input id="marca" name="marca" type="text" placeholder="Marca del producto" class="form-control">
                                
                            </div>
                        </div>
<br>
                        <div class="form-group">
                            <span class="col-md-2  text-center"><label >Ganancia: </label></span>
                            <div class="col-xs-5">
                                <input id="gan" name="gan" type="text" placeholder="porcentaje por unidad" class="form-control">
                            </div>
                        </div>
                        
<br>
                        <div class="form-group">
                            <span class="col-md-2  text-center"><label >Unidades: </label></span>
                            <div class="col-md-3">
                                <input id="uni" name="uni" type="text" placeholder="por caja " class="form-control">

                            </div>
                            <span class="col-md-5  text-center"  ><i class="fa fa-pencil-square-o fa-3x fa-fw bigicon"></i>
                        </div>
                        

                        
                        <br>
                        <div class="form-group">
                            

                            <span class="col-md-2  text-center"><label >Ganancia: </label></span>
                            <div class="col-xs-5">
                                <input id="gan2" name="gan2" type="text" placeholder="porcentaje por Caja" class="form-control">
                            </div>

                        </div>
                        <br>
                       
                         <div class="form-group">
                            <span class="col-md-2  text-center"><label >Proveedor: </label></span>
                            <div class="col-xs-7">
                                <select class=" form-control">
                             @foreach($prov as $prov)
                                
                                
                                <option  value="{{ $prov->id }}" >{{ $prov->nom }}</option>
                                
                            @endforeach
                           
                        </select>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <span class="col-md-2 text-center"><label >Descripción:</label></span>
                            <div class="col-md-7">
                                <textarea rows="2" class="form-control" id="desc" name="desc" placeholder="Agregue la descripcion del producto" rows="7"></textarea>
                            </div>
                        </div>
                            <br>
                        
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





                    <div class="title-block ">
                        <h1 class="title">
    

        Tabla Productos
    </h1>


                        <p class="title-description"> Productos  </p>
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
                                                        <th>Codigo</th>
                                                        <th>Nombre</th>
                                                        <th>Marca</th>
                                                        <th>Costo Promedio</th>
                                                        <th>Precio de venta</th>
                                                        <th>#Unidades Caja</th>
                                                        <th>Precio de Caja</th>
                                                        <th>Proveedor</th>
                                                        <th>Descripcion</th>
                                                        <th colspan="1" rowspan="">Accion</th>
                                                        <th colspan="1" rowspan="">Estado</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody id="hola">
                                                    @foreach($pro as $pro)
                                                

                                                    <tr>
                                                        <th scope="row" >{{ $pro->cod }}</th>
                                                        <td>{{ $pro->nomProd }}</td>
                                                        <td>{{ $pro->marca }}</td>
                                                        <td>0.10</td>
                                                        <td>0.11</td>
                                                        <td>{{ $pro->uniCaja }}</td>
                                                        <td>1.10</td>
                                                        
                                                                    <td>{{ $pro->nom }}</td>
                                                                
                                                        
                                                        <td>{{ $pro->desc }}</td>
                                                        
                                                        <td><a href="#"   class="btn btn-info btn-sm" data-id="{{ $pro->id }}">Modificar</a></td>
                                                         @if($pro->estado==true)
                                                            <td><button type="submit"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#gridSystemModal3">A c t i v o</button></td>
                                                        @endif

                                                        @if($pro->estado==false)
                                                            <td><button type="submit"  class="btn btn-sm gris" data-toggle="modal" data-target="#gridSystemModal3">Desactivo</button></td>
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
@section('scripts')
   
<script>
  
  $(function(){
    $('body').on('click','#hola a',function(event){
      event.preventDefault();
      //var id= $(this).attr('data-id');
      //var route = "/inve/"+id+"/edit";
      var id= $(this).attr('data-id');s
      nombre =$(this).parent().parent().children("td:eq(0)").text();
      marca =$(this).parent().parent().children("td:eq(1)").text();
      ganan =$(this).parent().parent().children("td:eq(2)").text();
      Unidades =$(this).parent().parent().children("td:eq(3)").text();
      ganan2 =$(this).parent().parent().children("td:eq(4)").text();
      Unidades =$(this).parent().parent().children("td:eq(5)").text();
      provee =$(this).parent().parent().children("td:eq(6)").text();
      descr =$(this).parent().parent().children("td:eq(7)").text();

      alert(nombre);
        $("#nomP").val(nombre);
        $("#marca").val(marca);
        $("#gan").val(ganan);
        $("#uni").val(Unidades);
        $("#gan2").val(ganan2);
        $("#hi").val(provee);
        $("#desc").val(descr);
        
  $('#gridSystemModal').modal('show');
    });
    });
  
</script>
  @endsection                         

                        
                           

@stop()
