@extends('probandos')

<?php $message=Session::get('message')?>

@if($message=='store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Exito!!</strong> Empleado Modificado
</div>
@endif


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

   {!!Html::script('js/jquery-1.9.0.min.js')!!}
  {!!Html::script('js/jquery.maskedinput.js')!!}
 <script type="text/javascript">
jQuery(function($) {
      $.mask.definitions['~']='[+-]';
      $('#date').mask('99/99/9999',{placeholder:"mm/dd/yyyy"});
      $('#tel').mask('9999-9999');
      $('#nit').mask("9999-999999-999-9");
      $("#tin").mask("99-9999999");
      $("#dui").mask("99999999-9");
      $("#ssn").mask("999-99-9999");
      $("#product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
      $("#eyescript").mask("~9.99 ~9.99 999");
      $('textarea,form').attr('autocomplete','off');
      $('input,form').attr('autocomplete','off');
   });
</script> 
{!!Html::script('js/jquery-1.9.0.min.js')!!}


            <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
<!--Inicio modal Activar empleado-->
@foreach ($emple as $cat3)
 <div id="gridSystemModal3{{$cat3->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert-warning">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel3">ACTIVAR EMPLEADO</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
          {!!Form::model($cat3,['method'=>'PATCH','route'=>['log.update',$cat3->id]])!!}
              <label for="">¿Seguro que desea cambiar el estado del empleado?</label>
              <input type="hidden" name="hi" value="{{ $cat3->estadoEmp }}">
              <input type="hidden" name="hi2" value="2">
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
@endforeach()





<!--inicio modal desacativar Empleado-->


@foreach ($emple as $cat2)
<div id="gridSystemModal2{{$cat2->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header alert-warning" bgcolor="blue">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel3" >DESACTIVAR EMPLEADO</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
           {!!Form::model($cat2,['method'=>'PATCH','route'=>['log.update',$cat2->id]])!!}
              <label for="">¿Seguro que desea cambiar el estado del empleado?</label>
              <input type="hidden" name="hi" value="{{ $cat2->estadoEmp }}">
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



<!--Inicio de modal -->
@foreach ($emple as $cat)
                <div class="modal fade" id="Edit{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;" >&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel">Modificar Empleado</h4>
      </div>
      <div class="modal-body">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" id="id">
                <div id="notificacion_resul_fci"></div>

      <form  id="f_subir_imagen" name="f_subir_imagen" method="post"  action="subir_imagen_usuario" class="formarchivo" enctype="multipart/form-data" >                
      
       <input type="hidden" name="id_usuario_foto" value="<?= $cat->id; ?>"> 
       <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 

      <div class="box-body">

        

     

     
      

       


      </div>

      </form>  
          


             {!!Form::model($cat,['method'=>'PATCH','route'=>['log.update',$cat->id]])!!}
                                                
                                  
                    <fieldset>
                     <input type="hidden" name="hi2" value="1">
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
           <body onload="function hola()">


           <script>
    //alert("Page is loaded");

     
            $('#myModal').on('show.bs.modal', function hola(e) {
               
    //get data-id attribute of the clicked element
          var productId = $(e.relatedTarget).data('empleid');

         alert(productid);

        //var productName = $(e.relatedTarget).data('product_name');
    //$("#confirmDelete #pName").val( productName );
    //$("#delForm").attr('action', 'put your action here with productId');//e.g. 'domainname/products/' + productId
});
    

</script>

              <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Nombre: </label></span></td>
                    <td colspan="2.5" align="center" >
                    <input id="nomEmp" name="nomEmp" type="text" placeholder="Nombre" value="{{ $cat->nomEmp }}" class="form-control" required="">
                    <br></td>
                      <td align="right" nowrap="nowrap"><span class="text-center" ><label ></label></span></td>
                    <td colspan="2.5" align="center" ><input id="apeEmp" name="apeEmp" type="text" value="{{ $cat->apeEmp }}"  placeholder="Apellido" class="form-control" required><br></td>
                    <td></td>
                    <td></td>
                    <td></td>
                
               </tr>
               
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >DUI: </label></span></td>
                    <td colspan="2" align="center"><input id="dui" name="DUI" type="text" value="{{ $cat->DUIEmp}}" placeholder="DUI" class="form-control" required=""><br></td>

                    <td colspan="2" rowspan="3" align="center"><span align="center">
                        <i style="font-size: 130px;" class="fa fa-pencil-square-o fa-3x fa-fw bigicon" align="center"></i>
                    </span></td>
                    <td></td>
                    <td></td>
                   
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >NIT: </label></span></td>
                    <td colspan="2" align="center" > <input id="nit" name="NIT" type="text" value="{{ $cat->NITEmp}}" placeholder="NIT " class="form-control" required><br></td>
                    <td></td>
                    <td></td>
                  
                   
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >F. nacimiento: </label></span></td>
                    <td colspan="2" align="center" ><input id="nacEmp" name="Fnac" type="date" value="{{ $cat->NacEmp }}" placeholder="Fecha" class="form-control" required ><br></td>
                    <td></td>
                    <td></td>
                   
                    
               </tr>

                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Telefono: </label></span></td>
                    <td colspan="2" align="center" ><input id="tel" name="telEmp" type="text" value="{{ $cat->telEmp }}" placeholder="telefono" class="form-control" required><br></td>
                    <td></td>
                    <td></td>
                   
                    
               </tr>
               

               <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Sexo: </label></span></td>
                    <td colspan="3" align="center" >
                    <?php $c=0; 
                          $d=0;
                    ?>
                    <select  name="sexo" class="form-control">

                          @foreach($emple as $emples)
                                
                        @if (($emples->sexEmp  != "Masculino") && 2> $c)

                                
                                  @if (( $cat->sexEmp  != "Masculino") && $d<1)
                                      <option  value="Femenino" selected="true"  >Femenino</option>
                                      <option  value="Masculino"   >Masculino</option>
                                       <option  value="Otro"   >Otro</option>

                                      <?php $d++; ?>
                                  @endif
                                   @if ( $cat->sexEmp  == "Masculino" && $d<1)
                                      <option  value="Masculino"  >Masculino</option>
                                       <option  value="Femenino"  >Femenino</option>
                                        <option  value="Otro"   >Otro</option>


                                      <?php $d++; ?>
                                    @endif
                                  <?php $c++; ?>
                          @endif
                           @if (($emples->sexEmp  == "Masculino") && 2> $c)

                                
                                  @if (( $cat->sexEmp  == "Masculino") && $d<1)
                                      <option  value="Masculino" selected="true"  >Masculino</option>
                                      <option  value="Femenino"   >Femenino</option>
                                       <option  value="Otro"   >Otro</option>

                                      <?php $d++; ?>
                                  @endif
                                   @if ( $cat->sexEmp  != "Masculino" && $d<1)
                                      <option  value="Femenino"  >Femenino</option>
                                       <option  value="Masculino"  >Masculino</option>
                                        <option  value="Otro"   >Otro</option>

                                      <?php $d++; ?>
                                    @endif
                                  <?php $c++; ?>
                          @endif
                                
                            @endforeach
                            
                        </select>

                                
                      
                    
                        <br>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"> <span class="text-center" ><label >Direccion: </label></span></td>
                    <td colspan="4"><textarea rows="1" class="form-control" id="message" name="dir" placeholder="Direccion" required >{{ $cat->dirEmp }}</textarea> </td>
                    <br>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
               </tr>
                   
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Cargo: </label></span></td>
                    <td colspan="3" align="center" >
                     <?php $c=0; 
                          $d=0;
                    ?>
                    <select name="cargo" class=" form-control">

                             @foreach($emple as $emplec)
                                
                        @if (($emplec->cargoEmp  != "Administrador") && 2> $c)

                                
                                  @if (( $cat->cargoEmp  != "Administrador") && $d<1)
                                      <option  value="Vendedor" selected="true"  >Vendedor</option>
                                      <option  value="Administrador"   >Administrador</option>
                                       <option  value="Otro"   >Otro</option>

                                      <?php $d++; ?>
                                  @endif
                                   @if ( $cat->cargoEmp  == "Administrador" && $d<1)
                                      <option  value="Administrador"  >Aministrador</option>
                                       <option  value="Vendedor"  >Vendedor</option>
                                        <option  value="Otro"   >Otro</option>

                                      <?php $d++; ?>
                                    @endif
                                  <?php $c++; ?>
                          @endif
                           @if (($emplec->cargoEmp  == "Administrador") && 2> $c)

                                
                                  @if (( $cat->cargoEmp  == "Administrador") && $d<1)
                                      <option  value="Administrador" selected="true"  >Administrador</option>
                                      <option  value="Vendedor"   >Vendedor</option>
                                       <option  value="Otro"   >Otro</option>

                                      <?php $d++; ?>
                                  @endif
                                   @if ( $cat->cargoEmp  != "Administrador" && $d<1)
                                      <option  value="Vendedor"  >Vendedor</option>
                                       <option  value="Administrador"  >Administrador</option>
                                        <option  value="Otro"   >Otro</option>

                                      <?php $d++; ?>
                                    @endif
                                  <?php $c++; ?>
                          @endif


                           @if (($emplec->cargoEmp  == "Otro") && 2> $c)

                                
                                  @if (( $cat->cargoEmp  == "Otro") && $d<1)
                                      <option  value="Otros" selected="true"  >Otros</option>
                                      <option  value="Administrador"   >Administrador</option>
                                       <option  value="Vendedor"   >Vendedor</option>

                                      <?php $d++; ?>
                                  @endif
                                   
                                  <?php $c++; ?>
                          @endif
                                
                            @endforeach
                           
                        </select>
                        <br>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Salario: </label></span></td>
                    <td colspan="2" align="center" ><input id="tipo" name="salario" type="text" value="{{ $cat->sueldoEmp }}" placeholder="Nuevo salario" class="form-control" required><br></td>
                    <td></td>
                    <td></td>
                   <td></td>
                    <td></td>
                    
               </tr>
           </body>
       </table>
                        
                    </fieldset>
                    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
       <!-- <button type="button" class="btn btn-primary">Guardar</button> -->
        <button type="submit" class="btn btn-primary">Guardar</button>

              
                                     {!! Form::close() !!}
        </div>
      

      
      </div>
    </div>
  </div>
</div>
@endforeach
<!--fin de modal -->
                    <div class="title-block ">
                        <h1 class="title">
    

        Tabla Empleados
    </h1>


                        <p class="title-description"> Empleados  </p>
                    </div>


                        
                    <section class="section table-responsive">


                            
                                <a href="/reporte2"> <input type="button" value="imprimir" class="btn btn-primary btn-lg"/></a>
                            
                            
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
                                                        <th>F Nacimiento</th>
                                                        <th>Telefono</th>
                                                        <th>Sexo</th>
                                                        
                                                        <th>Cargo</th>
                                                        <th>Salario</th>
                                                        <th colspan="2" rowspan="">Acciones</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody id="hola">
                                                  @foreach($emple as $emple)
                                                  


                                                    <tr>
                                                      
                                                        <td>{{ $emple->nomEmp }}</td>
                                                        <td>{{ $emple->apeEmp }}</td>
                                                        <td>{{ $emple->DUIEmp }}</td>
                                                        <td>{{ $emple->NITEmp }}</td>
                                                        <td>{{ $emple->NacEmp }}</td>
                                                        <td>{{ $emple->telEmp }}</td>
                                                        <td>{{ $emple->sexEmp }}</td>
                                                        <td>{{ $emple->cargoEmp }}</td>
                                                        <td>{{ $emple->sueldoEmp }}</td>


                                                        

                                                         <td><a href="#"   class="btn btn-info btn-sm" data-id="{{ $emple->id }}" data-toggle="modal" data-target="#Edit{{ $emple->id }}">Modificar</a>

                
                                                           </td>
                                                        @if($emple->estadoEmp==true)
                                                            <td><button type="submit"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#gridSystemModal2{{$emple->id}}">A c t i v o</button></td>
                                                        @endif

                                                        @if($emple->estadoEmp==false)
                                                            <td><button type="submit"  class="btn btn-sm gris" data-toggle="modal" data-target="#gridSystemModal3{{$emple->id}}">Desactivo</button></td>
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

                          
                           

<!-- 
   
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
      sexo =$(this).parent().parent().children("td:eq(6)").text();
      descr =$(this).parent().parent().children("td:eq(7)").text();

   
        $("#nomEmp").val(nombre);
        $("#apeEmp").val(marca);
        $("#dPagos").val(ganan);
        $("#sueldoEmp").val(Unidades);
        $("#bonoEmp").val(ganan2);
         $("#sexoEmp").val(sexo);
       // $("#totalPagar").val(provee);

       // $("#desc").val(descr);
        
  $('#myModal').modal('show');
    });
    });
  
</script>-->
        
 

  @stop()
@section('scripts')
   
  
{!! Html::script('js/script3.js') !!}

 @endsection