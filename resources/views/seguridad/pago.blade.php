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


<!--Inicio de modal -->
               <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;" >&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel">Pago Empleado</h4>
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
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Nombre: </label></span></td>
                    <td colspan="2.5" align="center" ><input id="nomEmp" name="nomEmp" type="text" placeholder="Nombre" class="form-control" >
                    <br></td>
                      <td align="right" nowrap="nowrap"><span class="text-center" ><label ></label></span></td>
                    <td colspan="2.5" align="center" ><input id="apeEmp" name="apeEmp" type="text" placeholder="Apellido" class="form-control"><br></td>
                    <td></td>
                    <td></td>
                    <td></td>
                
               </tr>
               
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Dias a pagar </label></span></td>
                    <td colspan="2" align="center"><input id="dPagos" name="dPagos" type="text" placeholder="$" class="form-control"><br></td>

                    <td colspan="2" rowspan="3" align="center"><span align="center">
                        <i style="font-size: 130px;" class="fa fa-money fa-3x fa-fw bigicon" align="center"></i>
                    </span></td>
                    <td></td>
                    <td></td>
                   
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Sueldo: </label></span></td>
                    <td colspan="2" align="center" > <input id="sueldoEmp" name="sueldoEmp" type="text" placeholder="$ " class="form-control"><br></td>
                    <td></td>
                    <td></td>
                  
                   
              

                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Bonos: </label></span></td>
                    <td colspan="2" align="center" ><input id="bonoEmp" name="bonoEmp" type="text" placeholder="$" class="form-control"><br></td>
                    <td></td>
                    <td></td>
                   
                    
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Total: </label></span></td>
                    <td colspan="2" align="center" ><input id="totalPagar" name="totalPagar" type="text" placeholder="$" class="form-control"><br></td>
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
        <button type="button" class="btn btn-primary">Pagar</button>
      </div>
    </div>
  </div>
</div>
<!--fin de modal -->
                    <div class="title-block ">
                        <h1 class="title">
    

        Tabla de Pagos
    </h1>


                        <p class="title-description"> Empleados  </p>
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
                                                       
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                        <th>DUI</th>
                                                        <th>NIT</th>
                                                        <th>Fecha ultima de pago</th>
                                                        <th>Telefono</th>
                                                        <th>Cargo</th>
                                                        <th>Salario</th>
                                                         <th>Accion</th>
                                                       
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody id="hola">

                                                 @foreach($emple as $emple)
                                                    <tr>
                                                        
                                                        <td>{{ $emple->nomEmp }}</td>
                                                        <td>{{ $emple->apeEmp }}</td>
                                                        <td>{{ $emple->DUIEmp }}</td>
                                                        <td>{{ $emple->NITEmp }}</td>
                                                         <td>{{ $emple->contraEmp }}</td>
                                                         <td>{{ $emple->telEmp }}</td>
                                                        <td>{{ $emple->cargoEmp }}</td>
                                                         <td>{{ $emple->sueldoEmp }}</td>

                                                        
                                                        
                                                        <td><a href="#"   class="btn btn-info btn-sm" data-id="{{ $emple->id }}">pagar</a></td>

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
      var id= $(this).attr('data-id');
         //alert(id);
      nombre =$(this).parent().parent().children("td:eq(0)").text();
      marca =$(this).parent().parent().children("td:eq(1)").text();
      ganan =$(this).parent().parent().children("td:eq(2)").text();
      Unidades =$(this).parent().parent().children("td:eq(3)").text();
      ganan2 =$(this).parent().parent().children("td:eq(4)").text();
      Unidades =$(this).parent().parent().children("td:eq(5)").text();
      provee =$(this).parent().parent().children("td:eq(6)").text();
      descr =$(this).parent().parent().children("td:eq(7)").text();

   
        $("#nomEmp").val(nombre);
        $("#apeEmp").val(marca);
        $("#dPagos").val(ganan);
        $("#sueldoEmp").val(Unidades);
        $("#bonoEmp").val(ganan2);
        $("#totalPagar").val(provee);
       // $("#desc").val(descr);
        
  $('#gridSystemModal').modal('show');
    });
    });
  
</script>
  @endsection         

                          
                           

@stop()