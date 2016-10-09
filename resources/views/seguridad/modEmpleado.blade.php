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
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
             
          


           {!! Form::open()!!}
                                                
                                               
              
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
                    <input id="nomP" name="nomEmp" type="text" placeholder="Nombre" value=productId   class="form-control">
                    <br></td>
                      <td align="right" nowrap="nowrap"><span class="text-center" ><label ></label></span></td>
                    <td colspan="2.5" align="center" ><input id="nomP" name="apeEmp" type="text" placeholder="Apellido" class="form-control"><br></td>
                    <td></td>
                    <td></td>
                    <td></td>
                
               </tr>
               
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >DUI: </label></span></td>
                    <td colspan="2" align="center"><input id="tipo" name="DUI" type="text" placeholder="DUI" class="form-control"><br></td>

                    <td colspan="2" rowspan="3" align="center"><span align="center">
                        <i style="font-size: 130px;" class="fa fa-pencil-square-o fa-3x fa-fw bigicon" align="center"></i>
                    </span></td>
                    <td></td>
                    <td></td>
                   
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >NIT: </label></span></td>
                    <td colspan="2" align="center" > <input id="marca" name="NIT" type="text" placeholder="NIT " class="form-control"><br></td>
                    <td></td>
                    <td></td>
                  
                   
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >F. nacimiento: </label></span></td>
                    <td colspan="2" align="center" ><input id="tipo" name="Fnac" type="date" placeholder="Fecha" class="form-control"><br></td>
                    <td></td>
                    <td></td>
                   
                    
               </tr>

                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Telefono: </label></span></td>
                    <td colspan="2" align="center" ><input id="tipo" name="tel" type="text" placeholder="telefono" class="form-control"><br></td>
                    <td></td>
                    <td></td>
                   
                    
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Correo: </label></span></td>
                    <td colspan="2" align="center" ><input id="tipo" name="correo" type="text" placeholder="Correo" class="form-control"><br></td>
                    <td></td>
                    <td></td>
                   
                    
               </tr>

               <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Sexo: </label></span></td>
                    <td colspan="3" align="center" ><select name="sexo" class="form-control">
                            <option>Selecione</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                           
                        </select>
                        <br>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"> <span class="text-center" ><label >Direccion: </label></span></td>
                    <td colspan="4"><textarea rows="1" class="form-control" id="message" name="dir" placeholder="Direccion" ></textarea> </td>
                    <br>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
               </tr>
                   
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Cargo: </label></span></td>
                    <td colspan="3" align="center" ><select name="cargo" class=" form-control">
                            <option>Selecione cargo</option>
                            <option>Vendedor</option>
                            <option>Otros</option>
                           
                        </select>
                        <br>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Salario: </label></span></td>
                    <td colspan="2" align="center" ><input id="tipo" name="salario" type="text" placeholder="Nuevo salario" class="form-control"><br></td>
                    <td></td>
                    <td></td>
                   <td></td>
                    <td></td>
                    
               </tr>
           </body>
       </table>
                        
                    </fieldset>
              
                                     {!! Form::close() !!}
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
    

        Tabla Empleados
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
                                                        <th>F Nacimiento</th>
                                                        <th>Telefono</th>
                                                        <th>Sexo</th>
                                                        
                                                        <th>Cargo</th>
                                                        <th>Salario</th>
                                                        <th colspan="2" rowspan="">Acciones</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach($emple as $emple)
                                                  


                                                    <tr>
                                                      
                                                        <td>{{ $emple->nom }}</td>
                                                        <td>{{ $emple->ape }}</td>
                                                        <td>{{ $emple->DUI }}</td>
                                                        <td>{{ $emple->NIT }}</td>
                                                        <td>{{ $emple->fechaNac }}</td>
                                                        <td>{{ $emple->tel }}</td>
                                                        <td>{{ $emple->sex }}</td>
                                                        <td>{{ $emple->cargo }}</td>
                                                        <td>{{ $emple->sueldo }}</td>

                                                        <td>
<button value="+{{ $emple->id }}+" OnClick='Mostrar(this);' class='btn btn-info btn-sm' data-toggle='modal' data-target='#myModal'>Modificar</button>
                                                           </td>
                                                        <td> <button type="button" id="hola" data-empleid="{{ $emple->id }}" class="btn btn-xs btn-default btn-flat" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i></button></td>
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
    {!!Html::script('js/scripMemp.js')!!}

  @endsection