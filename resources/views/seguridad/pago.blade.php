@extends('probandos')
<?php $message=Session::get('message')?>

@if($message=='store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Exito!!</strong> Pago Realizado
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
      $('input,form').attr('autocomplete','off');
      $('textarea,form').attr('autocomplete','off');
   });
 </script>

            <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">


<!--Inicio de modal -->
@foreach ($emple as $cat)
               <div id="Edit{{$cat->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;" >&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel">Pago Empleado</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
 
          
          {!! Form::open(['route'=>'pagar.store','method'=>'POST','class'=>'form-horizontal']) !!}
                

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
               <input type="hidden" value="{{ $cat->id }}" id="cod" name="cod">
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Nombre: </label></span></td>
                    <td colspan="2.5" align="center" ><input id="nomEmp" name="nomEmp" value="{{ $cat->nomEmp }}"type="text" placeholder="Nombre" disabled class="form-control" >
                    <br></td>
                      <td align="right" nowrap="nowrap"><span class="text-center" ><label ></label></span></td>
                    <td colspan="2.5" align="center" ><input id="apeEmp" name="apeEmp" value="{{ $cat->apeEmp }}" type="text" placeholder="Apellido"  disabled= class="form-control"><br></td>
                    <td></td>
                    <td></td>
                    <td></td>
                
               </tr>
               
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Dias a pagar </label></span></td>
                    <td colspan="2" align="center"><input id="dPagos" name="dPagos" type="text" placeholder="$" pattern="[0-7]{1}" class="form-control"  onkeyup="sumar();"><br></td>

                    <td colspan="2" rowspan="3" align="center"><span align="center">
                        <i style="font-size: 130px;" class="fa fa-money fa-3x fa-fw bigicon" align="center"></i>
                    </span></td>
                    <td></td>
                    <td></td>
                   
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Sueldo: </label></span></td>
                    <td colspan="2" align="center" > <input disabled id="sueldoEmp" name="sueldoEmp" value="{{ $cat->sueldoEmp }}" type="text" placeholder="$ " class="form-control"><br></td>
                    <td></td>
                    <td></td>
                  
                   
              

                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Bonos: </label></span></td>
                    <td colspan="2" align="center" ><input id="bonoEmp" name="bonoEmp" type="text" placeholder="$" class="form-control"  onkeyup="sumar();"><br></td>
                    <td></td>
                    <td></td>

                   
                    
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Total: </label></span></td>
                    <td colspan="2" align="center" ><input id="totalPagar" name="totalPagar" type="text"  placeholder="$" class="form-control"  ><br></td>
                    <td></td>
                    <td></td>
                   
                    
               </tr>

              
           </tbody>
       </table>
                        
                    </fieldset>
                    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Pagar</button>
      </div>
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
                                                        <th>Fecha de contrato</th>
                                                        <th>Telefono</th>
                                                        <th>Cargo</th>
                                                        <th>Salario</th>
                                                         <th>Accion</th>
                                                       
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody >
                                                  <?php $cont=0; ?>
                                    @foreach($emple as $emple)
                                     <?php
                                     
                      
                                        if($emple->estadoEmp==true){
                                          $cont++;
                                      ?>
                                                    <tr>
                                                        
                                                        <td>{{ $emple->nomEmp }}</td>
                                                        <td>{{ $emple->apeEmp }}</td>
                                                        <td>{{ $emple->DUIEmp }}</td>
                                                        <td>{{ $emple->NITEmp }}</td>
                                                         <td>{{ $emple->contraEmp }}</td>
                                                         <td>{{ $emple->telEmp }}</td>
                                                        <td>{{ $emple->cargoEmp }}</td>
                                                         <td>{{ $emple->sueldoEmp }}</td>

                                                        
                                                        
                                                        <td><a href="#"   class="btn btn-info btn-sm" data-id="{{ $emple->id }}" data-toggle="modal" data-target="#Edit{{ $emple->id }}">Pagar</a>

                                                         </tr>
                                                




                                      <?php } 
                                                     ?>
                                                    
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


<script type="text/javascript" charset="utf-8">


 function sumar()
{
var a=document.getElementById("sueldoEmp").value;
var b=document.getElementById("dPagos").value;
var c=parseFloat(a);
var d=(parseFloat(c)*parseFloat(b));
var t=document.getElementById("bonoEmp").value;
var e=(parseFloat(d)+parseFloat(t)).toFixed(2);
var f=0;
if(isNaN(a)){
   a=1;
  }
  if(isNaN(b)){
   b=1;
  }
    c= a*b;
  if(isNaN(c)){
   c=1;
  }
  if(isNaN(t)){
   t=0;
  }
  if(isNaN(e)){
   e=0;
   var e=(parseFloat(d)).toFixed(2);
  }

  

document.getElementById("totalPagar").value=e;
};
</script>
 @endsection
