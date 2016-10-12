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
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;" >&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel">Modificar datos del proveedor</h4>
      </div>
      <div class="modal-body">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" id="id">
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
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Nombre: </label></span></td>
                    <td colspan="3" align="center" ><input id="nomP" name="nomP" type="text" placeholder="Nombre del Proveedor" class="form-control" >
                    <br></td>

                    <td></td>
                    <td></td>
                    <td></td>
                
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Telefono: </label></span></td>
                    <td colspan="2" align="center" ><input id="nomP" name="nomP" type="text" placeholder="Telefono del proveedor" class="form-control"><br></td>
                    <td colspan="2" rowspan="2" align="center"><span align="center">
                        <i style="font-size: 150px;" class="fa fa-pencil-square-o fa-3x fa-fw bigicon" align="center"></i>
                    </span></td>
                    <td></td>
                    <td></td>
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >NIT: </label></span></td>
                    <td colspan="2" align="center"><input id="tipo" name="tipo" type="text" placeholder="Ingrese el nit" class="form-control"><br></td>
                    <td></td>
                    <td></td>
                    <td></td>
                   
             
                <tr>
                   <td align="right" nowrap="nowrap"> <span class="text-center" ><label >Direccion: </label></span></td>
                    <td colspan="4"><textarea rows="2" class="form-control" id="message" name="message" placeholder="Ingrese la direccion " rows="7"></textarea><br></td>
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
         <i class="fa fa-truck bigicon"></i>
          </span>

                        <h1 class="title">
    

        Tabla Proveedores
    </h1>


                        <p class="title-description"> Proveedores  </p>
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

                                                <input id="fname" name="name" type="text" class="form-control">
                                                </div>
                                                   </div> 


                                                   </div> </div>
                                        <section class="example">
                                            <table class="table table-bordered table-hover" style="width:100%" >
                                                <thead align="center">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nombre</th>
                                                        <th>Telefono</th>
                                                        <th>NIT</th>
                                                        <th>Dirreccion</th>
                                                        <th colspan="2" class="formatoTabla">Acciones</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody id="datosprove">

                                              
                                                      
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
<script  type="text/javascript" >
 $(document).ready(function(){
  Carga();
});

function Carga(){//esta funcion es para llenar la tabla
  var tablaDatos = $("#datosprove");
  var route = "/prove";

  $("#datosprove").empty();
  var con=1;
  $.get(route, function(res){
    $(res).each(function(key,value){
      tablaDatos.append("<tr><td>"+con+"</td>"+"<td>"+value.nom+"</td><td>"+value.tel+"</td><td>"+value.nit+"</td><td>"+value.dir+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-info btn-sm' data-toggle='modal' data-target='#myModal'>Modificar</button></td><td><button class='btn btn-primary btn-sm' value="+value.id+" OnClick='Estados(this);'>Activo</button></td></tr>");
    con++;
    });
  });
}

function Mostrar(btn){//aqui es para que los cargu en la ventana modal los datos a modificar
  var route = "/escuela/"+btn.value+"/edit";

  $.get(route, function(res){
    $("#idescuela").val(res.idescuela);
    $("#nomesc").val(res.nomesc);
    $("#nomdirec").val(res.nomdirec);
    $("#telesc").val(res.telesc);
    $("#diresc").val(res.diresc);

    
  });
}

$("#actualizar").click(function(){
  var value = $("#idescuela").val();//recupera los datos del html
  var dnomesc= $("#nomesc").val();
  var dnomdirec= $("#nomdirec").val();
  var dtelesc= $("#telesc").val();
  var ddiresc= $("#diresc").val();
  var route = "/escuela/"+value+"";
  var token = $("#token").val();//aqui recupero de mi variable toque para decirle a laravel no es intencionada
  var data ='nomesc='+dnomesc+'&nomdirec='+dnomdirec+'&telesc='+dtelesc+'&diresc='+ddiresc;//cuidadito esto espara poder guardar en la base de datos
  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType: 'json',
    data: data,
    success: function(){
      Carga();

      $("#myModal").modal('toggle');// se oculte la ventana modal despues de haber actualizado
      $("#msj-success").fadeIn();//me muestra un msj que se actualizado para que lo note el usuario
    }
  });
});



</script>
@endsection