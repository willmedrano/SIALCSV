@extends('probandos')

@section('content')
<style type="text/css" >
    


.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
legend{
    color: #36A0FF;
}
}
    
</style>
   
               

               <article class="content static-tables-page">
               @foreach ($emple as $cat)
                <div class="modal fade" id="Edit{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;" >&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel">Permitir Empleado</h4>
      </div>
      <div class="modal-body">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" id="id">
             
          
 <!--{!! Form::open(['route'=>'log.store','method'=>'POST'])!!}-->

             {!!Form::model(['method'=>'PATCH','route'=>'permitir.store'])!!}
                                                
                                               
              
                    <fieldset>
                     <input type="hidden" name="hi2" value="{{$cat->id}}">
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
                 
                    <td colspan="6" align="center" ><IMG src="assets/faces/3.jpg"  WIDTH=120 HEIGHT=130 ALT="Foto"><br></td>
                    <td></td>
                    <td></td>
                    <td></td>

                   
                    
               </tr>

                       
              <tr>
                    
                  
                   <td align="right" nowrap="nowrap"> 
                  

                  <span class="text-center" ><label >Nombre: </label></span></td>
                    <td colspan="2.5" align="center" >
                     <br> 
                    <input id="nomEmp" name="nomEmp" type="text" placeholder="Nombre" value="{{ $cat->nomEmp }}" class="form-control">
                    <input type="hidden" name="permitir" id="permitir" value="">
                    <br></td>
                      <td align="right" nowrap="nowrap"><span class="text-center" ><label ></label></span></td>
                    <td colspan="2.5" align="center" > <br><input id="apeEmp" name="apeEmp" type="text" value="{{ $cat->apeEmp }}"  placeholder="Apellido" class="form-control"><br></td>
                    <td></td>
                    <td></td>
                    <td></td>
                
               </tr>

               
                
                
                
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Telefono: </label></span></td>
                    <td colspan="2" align="center" ><input id="tipo" name="telEmp" type="text" value="{{ $cat->telEmp }}" placeholder="telefono" class="form-control"><br></td>
                    <td></td>
                    <td></td>
                   
                    
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Correo: </label></span></td>
                    <td colspan="2" align="center" ><input id="correoEmp" name="correoEmp" type="text" placeholder="Correo" class="form-control"><br></td>
                    <td></td>
                    <td></td>
                   
                    
               </tr>

               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Usuario: </label></span></td>
                    <td colspan="2" align="center" ><input id="login" name="login" type="text" value="admin{{ $cat->id }}"placeholder="Correo" class="form-control"><br></td>
                    <td></td>
                    <td></td>
                   
                    
               </tr>

               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Contraseña: </label></span></td>
                    <td colspan="2" align="center" ><input id="pass" name="pass" type="password" value="admin{{ $cat->id }}" placeholder="Correo" class="form-control"><br></td>
                    <td></td>
                    <td></td>
                   
                    
               </tr>

               
                
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Cargo: </label></span></td>
                    <td colspan="3" align="center" ><select name="cargo" class=" form-control">
                            @foreach($emple as $emplec)
                              

                                <option  value="{{ $emplec->cargoEmp }}" >{{ $emplec->cargoEmp }}</option>
                                
                                
                                

                            @endforeach
                           
                        </select>
                        <br>
                    </td>
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
                  
                   
                    <div class="title-block">
                        <h1 class="title">Seguridad</h1>
                        <p class="title-description"> Permitir Acceso </p> 
                         
                           
                    </div>
                      
                    {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
                    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
                    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
                    {!!Html::style('assets/css/style.css')!!}  
                    {!!Html::style('assets/css/main-style.css')!!} 

                       <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title">Empleados</h1>
                             </div>

                            <section class="section">

                                    <di>
                                    <div class="card card-block sameheight-item" >


                                         <form class="form-horizontal" method="post">

                                            
                                      
                                            <h2>
                            Empleados
                        </h3> 
                        <br>
                         <div class="form-group" align="right">
                                                  <span class="col-md-1 col-md-offset-8 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                                               <div class="col-xs-3">

                                                <input id="filtrar" name="name1" type="text"  class="form-control">
                                                </div>
                                                   </div>
                          

                       
                                        
                                             <div class="form-group">
                                               
                                            
                                                <div class="col-md-12" >
                                                     <div class="panel-body"> 
                            <div class="table-responsive">
                             <br>
                                <table class="table  table-bordered table-hover" id="dataTables-example">
                                    <thead >
                                        <tr align="center" class="warning">
                                            <th> Codigo </th>
                                            <th> Nombre </th>
                                            <th> Apellido </th>
                                            <th> Telefono </th>
                                            <th> Sexo </th>
                                            <th> Cargo </th>
                                            <th> Acceso </th>
                                        </tr>
                                    </thead>
                                    <tbody class="buscar">

                    <?php $cont=0; ?>
                                    @foreach($emple as $emples)
                                     <?php
                                     
                      $resultado=DB::select('select * from usuarios where idemp = ?', [ $emples->id ]); 
                                        if(($resultado==false)&&($emples->estadoEmp==true)){
                                          $cont++;
                                      ?>
                        
                                     


                                                    <tr>
                                                        <td><?php echo $cont; ?></td>
                                                        <td>{{ $emples->nomEmp }}</td>
                                                        <td>{{ $emples->apeEmp }}</td>
                                                        <td>{{ $emples->telEmp }}</td>
                                                        <td>{{ $emples->sexEmp }}</td>
                                                        <td>{{ $emples->cargoEmp }}</td>
                                                        
                                               <td><a href="#"   class="btn btn-info btn-sm" data-id="{{ $emples->id }}" data-toggle="modal" data-target="#Edit{{ $emples->id }}">Permitir</a>
                                                    

                                                    </tr>
                                
                                              <?php } 
                                                     ?>

                                                      
                                                      @endforeach  
                                        
                                        
                                    </tbody>
                                                     </table>
                                                            
                                                        
                                                </div>
                                                
                                        </section>

</form>
                               
                                    </div>
                                </div>
                            </div>
                        
                    

                    <br>
                    <br>
                    
                    
                   
                                     
                                    
                                </div>
                            </div>
 
                        </div>
                    </section>
  
@endsection
  @section('scripts')
  
    {!!Html::script('js/buscaresc.js')!!}
  @endsection