@extends('probandos')

@section('content')
<?php $message=Session::get('message')?>

@if($message=='store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Exito!!</strong> Contrato Creado
</div>
@endif
<style type="text/css" >
    
.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
.legend{
    color: #36A0FF;
}
.title
{
    color: #36A0FF;
}
.title{
  font-size: 25px;  
}
 .title-description{
   font-size: 15px;   
 }  
 .formatoTabla {
   
} 
h2,h1,span
{
    color: #36A0FF;
    font-size: 15px; 
}
#content{
  position: absolute;
  min-height: 50%;
  width: 80%;
  top: 20%;
  left: 5%;
 }

 .selected{
  cursor: pointer;
 }
 .selected:hover{
  background-color: #0585C0;
  color: white;
 }
 .seleccionada{
  background-color: #0585C0;
  color: white;
 }
</style>

                <article class="content forms-page" >
                  
                   
                    <div class="title-block">
                    <span class="col-md-1  text-center">
                        <i class="fa fa-shopping-cart  bigicon"></i>
                     </span>
                        <h1 class="title">Contrato</h1>
                        <p class="title-description">Registro de Contrato </p> 
                         
                           
                    </div>
                    {!!Html::script('js/jquery-1.9.0.min.js')!!} 
                    {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
                    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
                    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
                    {!!Html::style('assets/css/style.css')!!}  
                    {!!Html::script('../jquery.js')!!} 

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1 class="panel-title">Formulario de Contrato</h1>
            </div>
            <h2 align="center">Contrato</h2>

            <section class="section"> 
                <div>
                <div class="card card-block sameheight-item" >
                
                {!! Form::open(['route'=>'aux3.store','method'=>'POST','class'=>'form-horizontal' ,'id'=>'frm1','name'=>'frm1']) !!}
                     
                        <br><br>
                        
                        <div class="form-group">
                           
                            <span class="col-md-1 col-md-offset-2 text-center">
                           <i >paquete</i>
                            </span>
                            <div class="col-md-3" id="aux">
                               <select class=" form-control" name="idpaquete" id="idpaquete">
                            <option>--Selecione un paquete--</option>
                            @foreach($prov as $prov1)

                                <option  value="{{ $prov1->id }}" >{{ $prov1->nompaquete }}</option>
                            @endforeach
                           
                        </select> 
                            </div>
                        </div>
                              <input type="hidden"  name="hprod" id="hprod" value="">
                                            <br>
                                              
                    <div class="form-group"  >

                        <span class="col-md-1 col-md-offset-2 text-center">
                            <i class="fa fa-shopping-cart bigicon"></i></span>

                      <div class="col-xs-3">
                      <input id="cantcomp" name="cantcomp" type="text" required placeholder="cantidad a comprar" class="form-control" onkeyup="sumar();">
                      
                      <input type="hidden" name="canaux" id="canaux" value="">
                      </div>
                      <span class="col-md-1  text-center"><i class="fa fa-dollar bigicon"></i></span>
                      <div class="col-xs-3">
                      <input id="preciocomp" name="preciocomp" type="text" placeholder="Precio de compra unitario" class="form-control" onkeyup="sumar();">
                      </div>
                      
                      </div>
                      <br>  

                      <div class="form-group">
                      <span class="col-md-1 col-md-offset-2 text-center">
                      <i class="fa fa-dollar (alias) bigicon"></i>
                      </span>

                     <div class="col-xs-3">
                     <input id="subtotalcomp" name="subtotalcomp" type="text" placeholder="subtotal" class="form-control" disabled="true">
                     </div>
                     
                     </div>
                     <br>
                     <div class="form-group" align="center">
                     <input type="submit" id="bt_add" href="#" class="btn btn-info" value="Agregar al carrito">
                     </div>
                     {!! Form::close() !!}
                     <div class="form-group">                       
                      <div class="col-md-12" >
                      <div class="panel-body"> 
                                              
                            <div class="table-responsive" align="center" >
                             <br>
                                
                                <table id="tabla" name="tabla" class="table table-bordered">
                                    <thead valign="bottom" align="right" >
                                        <tr  class="warning">
                                            <th align="center" >#</th>
                                            <th align="center" >codigo</th>
                                            <th align="center" >paquete</th>
                                            <th align="center">cantidad</th>
                                            <th align="center" >precio</th>
                                            <th align="center" >subtotal</th>
                                            <th align="center" >accion</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody id="hola">
                                                    <?php $cont=0; $p=0?>
                                                    @foreach($contrato as $aux2)
                                                    

                                                    <tr>
                                                        <td><?php $cont++;  echo $cont; ?></td>
                                                        <td>{{ $aux2->cod }}</td>
                                                        <td>{{ $aux2->nomProd }}</td>
                                                        <td>{{ $aux2->cancont3 }}</td>
                                                        <td>{{ $aux2->preciocont3 }}</td>
                                                        <td>
                                                          <?php
                                                           
                                                        
                                                        $a=($aux2->cancont3*$aux2->preciocont3);
                                                            $iva=($p+$a)*0.13;
                                                            $p=$p+$a;
                                                            
                                                            echo $a;
                                                            ?>
                                                        </td>
                                                                                                                
                                                        <td>
                                    {!!Form::open(['route'=>['aux3.destroy',$aux2->id],'method'=>'DELETE'])!!}
                                                        <input type="submit" name="elimina" value="Eliminar"   class="btn btn-danger active " >
                                                        {!!Form::close()!!}   

                                                        </td>
                                                         
                                                       
                                                    </tr>
                                                  
                                                  
                                                      @endforeach

                                                </tbody>
 
                                   
                                                     </table>
                                                     
                                                             <nav align="right">
                                                                 <ul class="pagination" align="right">
                                                                    <li class="disabled">
                                                    <a href="#" aria-label="Previous">
                                                <span  class="disabled" >&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                    </a>
                                                     </li>
                                                    <li class="active"><a href="#">1</a></li>
                                                                     <li><a href="#">2</a></li>
                                                                     <li><a href="#">3</a></li>
                                                                     <li><a href="#">4</a></li>
                                                                     <li><a href="#">5</a></li>
                                                                   
                                                                     <li>
                                                    <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Previous</span>
                                                </a>
                                                                     </li>
                                                                 </ul>
                                                             </nav>
                                                        
                                                </div>
                                                </div>
                                                </div>
                                            </div>
                                            {!! Form::open(['route'=>'contrato.store','method'=>'POST','class'=>'form-horizontal','id'=>'frm2','name'=>'frm2']) !!}
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-home bigicon"></i>
                                                </span>
                                                <div class="col-xs-3">
                                                    
                                                 
                                                    <select class="form-control" name="formap" id="formap">
                                                     @foreach($esc as $escs)
                                                         <option  value="{{ $escs->id }}" >{{ $escs->nomesc}}</option>
                                                     @endforeach 
                                                    </select>
                                            
                                                </div>
                                                <div class="form-group">

                        <span class="col-md-1 text-center">
                            <i class="fa fa-calendar bigicon"></i></span>
                            <div class="col-xs-3">
                            <input id="fechacompra" name="fechacompra" type="date" class="form-control" value="<?php echo dameFecha(date("Y-m-d"),0);?>" ></div>
                    </div>
                                               </div> 
                                            <br>
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-usd bigicon"></i>
                                                </span>
                                                <div class="col-xs-3">
                                                    
                                                  <input id="totalpagar" name="totalpagar" type="text" placeholder="Total apagar" disabled="true" class="form-control" value="<?php echo $p;?>">
                                                  <input id="total" name="total" type="hidden" placeholder="Total apagar" class="form-control" value="<?php echo $p;?>">

                                            
                                                 
                                                </div>
                                                   <span class="col-md-1  text-center"><i class="bigicon"style=" font-weight: bold;">IVA</i></span>
                                                  <div class="col-xs-3">
                                                 
                                             <input id="IVA" name="IVA" type="text" placeholder="IVA A Pagar" class="form-control" disabled = 'true' value="<?php echo $p*0.13;?>" >
                                               </div>
                                                </div>
                                            <br>


                                            <div class="form-group">
                                                <div class="col-md-12 text-center" align="center">
                                                    <button type="submit"  class="btn btn-lg btn-primary ">Guardar</button>
                                                </div>                  
                                            </div>
                  
                                  {!! Form::close() !!}
                                </div>
                            </div>
 
                        </div>
                    </section>
  
 @endsection
<?php 
$time=time();
    
    function dameFecha($fecha,$dia){
        list($year,$mon,$day)=explode('-',$fecha);
        return date('Y-m-d',mktime(0,0,0,$mon,$day+$dia,$year));    
    }
   $total=0; 


  
?>
 @section('scripts')

{!! Html::script('js/bootstrap.js') !!}
//Aqui esta el problema era un script

 
<script type="text/javascript" charset="utf-8">
function sumar()
{
var a=document.frm1.cantcomp.value;
var b=document.frm1.preciocomp.value;


if(isNaN(a)){
   a=1;
  }
  if(isNaN(b)){
   b=1;
  }
  var g=document.frm1.canaux.value;//tamaño maximo de productos en existencia
  var t=parseFloat(g);
  var j=parseFloat(a);
 if(j<=t && j>0)
 {
        var c=(parseFloat(a)*parseFloat(b)).toFixed(4);
        var f=0;
         c= a*b;
        if(isNaN(c)){
         c=1;
            }
            f= c;
            if(isNaN(f)){
             f=0;
                }
        document.frm1.subtotalcomp.value=f.toFixed(2);
 }else{
    document.frm1.cantcomp.value="";
    document.frm1.subtotalcomp.value="";
    // jQuery
 }
}
function cuotasapagar()
{
var a=document.frm2.totalpagar.value;

var b=document.frm2.cuotas.value;


var c=(parseFloat(a) / parseFloat(b)).toFixed(2);

if(isNaN(c)){
   c=1;
  }
if(isNaN(a)){
   a=1;
  }
  if(isNaN(b)){
   b=1;
  }
  
  
 document.frm2.montocouta.value=c;
 //alert(document.frm2.cantotal.value);
 //alert(c.toFixed(2));
}

 $(document).ready(function(){
$('#aux').on('change','#idpaquete',function (){
  
  var producto=$("#idpaquete").val();
  var ruta="/llenadoProductopaquetes/"+producto;
  var ruta2="/preciodelpaquete/"+producto;
  var cont2=0;
  var cont1=0;
 
 $.get(ruta, function(res){
  $(res).each(function(key,value){
       $("#hprod").val(value.id);
       $("#preciocomp").val(value.preciop);
      
      });
  
 });
 
 $.get(ruta2, function(res){
  $(res).each(function(key,value){
       $("#canaux").val(value.canlote);
      });
  cont2=cont2+1;
 });

});
  
 });
 
  function seleccionTipopago() {
           
          var posicion=document.getElementById('formap').options.selectedIndex; //posicion
          var j=document.getElementById('formap').options[posicion].text; //valor
          


            if(j=="Credito"){
            v="";
              document.frm2.cuotas.disabled = false;//Aqui es para que si lo pueda editar
              document.frm2.ppcuotas.value=document.frm2.montocouta.value;
             //$('#cuotas').prop("required", true);//aqui le asigna que este campo es requerido
             //input_form.setAttribute("type", "password");
            $("#cuotas").val("");

            document.frm2.ncuotas.value=document.frm2.cuotas.value;
          
            document.frm2.ppcuotas.value=document.frm2.montocouta.value;
            }
           if(j=="Contado")
           {
                   document.frm2.cuotas.disabled = true;// esto es para que no se pueda editar
                  $("#cuotas").val(""+1);
                  document.frm2.montocouta.value=document.frm2.total.value;
                
                  document.frm2.ppcuotas.value= document.frm2.montocouta.value;

                  var a=document.frm2.total.value;
                  document.frm2.ncuotas.value=1;
           // $('#cuotas').removeAttr("required");// quitarle de que es requerido
           }
           

            
                                                      
        }
 



 
function enter(){
      //var char= event.which || event.keyCode;
      var producto=$("#idcodproduc").val();
      
      //var producto=$("");/escuela/"+btn.value+"/edit"
     var ruta="/llenadoProducto/"+producto;


     $.get(ruta,function(res){
           //producto.empty();
      $(res).each(function(key,value){
       //producto.append("<input type='text'  id='"+value.id+"' value="+value.nombre+">");
      $("#nomproducto").val(value.nomProd);
     //$("#nomdirec").val(res.nomdirec);
     // $("#telesc").val(res.telesc);
    //$("#diresc").val(res.diresc);
      });
     });
      
    }
</script>
 @endsection