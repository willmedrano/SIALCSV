
@extends('probandos')

<?php $message=Session::get('message')?>

@if($message=='update')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Exito!!</strong>  Actualizado el registro
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
.quitarborder{
 
    color:white;
}

.formatoTabla {
    
    font-size: 16px;
    text-align: center;
   }
   input[type="date"] {
  line-height: 34px;
  font-size: 16px;
}
    
</style>

{!!Html::script('js/jquery-1.9.0.min.js')!!}
  {!!Html::script('js/jquery.maskedinput.js')!!}
 <script type="text/javascript">
jQuery(function($) {
      $.mask.definitions['~']='[+-]';
      $('#date').mask('99/99/9999',{placeholder:"mm/dd/yyyy"});
      $('#telesc').mask('9999-9999');
      $('#phoneext').mask("(999) 999-9999? x99999");
      $("#tin").mask("99-9999999");
      $("#ssn").mask("999-99-9999");
      $("#product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
      $("#eyescript").mask("~9.99 ~9.99 999");
      $('textarea,form').attr('autocomplete','off');
      $('input,form').attr('autocomplete','off');
   });
</script>

            <div class="sidebar-overlay" id="sidebar-overlay"></div>

                <article class="content static-tables-page">


@foreach ($escuelas as $escuelam)
<div  id="Edit{{$escuelam->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel">Modificar Producto</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
      {!!Form::model($escuelam,['method'=>'PATCH','route'=>['escuela.update',$escuelam->id]])!!}
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
           <tbody>
               
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Escuela: </label></span></td>
                    <td colspan="2" align="center" >  <input id="nomesc" name="nomesc" type="text"  class="form-control" value="{{$escuelam->nomesc}}">  
                                                    <br></td>
                    <td colspan="2" rowspan="3" align="center"><span align="center">
                        <i style="font-size: 150px;" class="fa fa-pencil-square-o fa-3x fa-fw bigicon" align="center"></i>
                    </span></td>
                    <td></td>
                    <td></td>
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Director: </label></span></td>
                    <td colspan="2" align="center"><input id="nomdirec" name="nomdirec" type="text"  class="form-control" value="{{$escuelam->nomdirec}}"> <br></td>
                    <td></td>
                    <td></td>
                    <td></td>
                     </tr>
             
                <tr>
                   <td align="right" nowrap="nowrap"> <span class="text-center" ><label >Telefono: </label></span></td>
                    <td colspan="2">  <input id="telesc" name="telesc" type="text"  class="form-control" value="{{$escuelam->telesc}}"> <br>
                    </td>
                    <td></td>
                    <td></td>
                    
                    
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"> <span class="text-center" ><label >Dirección: </label></span></td>
                    <td colspan="3"><textarea class="form-control" id="diresc" name="diresc"  rows="2" >{{$escuelam->diresc}}</textarea></td>
                    <td></td>
                    <td></td>
                    
                    
               </tr>
           </tbody>
       </table>
                        
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



 <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Escuela seaActualizado Correctamente.</strong> 

</div>



                    <div class="title-block">
                     <span class="col-md-1  text-center">
         <i class="fa fa-home bigicon"></i>
          </span>

                        <h1 class="title">
    

        Tabla de Escuelas
    </h1>


                        <p class="title-description"> Escuelas  </p>
                    </div>


                        
                    <section class="section">


                            
                                <button type="submit"  class="btn btn-primary btn-lg">Imprimir</button>
                            
                            
                        <div class="row">
                            
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                           <div class="form-group" align="right">
                                                  <span class="col-md-1 col-md-offset-7 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                                               <div class="col-xs-4">

                                                <input id="filtrar" name="name" type="text" class="form-control">
                                                </div>
                                                   </div> </div>
                                        <section class="example">
                                        <br>
                                            <table class="table table-bordered table-hover" style="width:100%" >
                                                <thead align="center">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Escuela</th>
                                                        <th>Director</th>
                                                        <th>Telefono</th>
                                                        <th>Dirreccion</th>
                                                        <th colspan="2" class="formatoTabla">Acciones</th>
                                                       
                                                    </tr>
                                                </thead>
                                                
                                                <tbody id="datos" class="buscar"> 
                                                <?php $con=0; ?>
                                                @foreach($escuelas as $escuela)
                                                
                                                    <?php $con++;?>
                                                    <tr>
                                                       <td>  <?php echo $con;?></td>
                                                        <td>{{ $escuela->nomesc }}</td>
                                                        <td>{{ $escuela->nomdirec }}</td>
                                                        <td>{{ $escuela->telesc }}</td>
                                                        <td>{{ $escuela->diresc}}</td>
                                                       
                                                       <td><a href="#"   class="btn btn-info btn-sm" data-id="{{ $escuela->id }}" data-toggle="modal" data-target="#Edit{{ $escuela->id }}">Modificar</a>
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

@endsection
  @section('scripts')
    <!--{!!Html::script('js/scriptpersanalizado.js')!!}-->
    {!!Html::script('js/buscaresc.js')!!}
  @endsection




