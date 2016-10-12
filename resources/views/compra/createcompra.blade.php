@extends('probandos')

@section('content')
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
                        <h1 class="title">Compras</h1>
                        <p class="title-description">Registro de Compras </p> 
                         
                           
                    </div>
                      
                    {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
                    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
                    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
                    {!!Html::style('assets/css/style.css')!!}  


        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1 class="panel-title">Formulario de Compras</h1>
            </div>
            <h2 align="center">Compras</h2>
            <section class="section"> 
                <div>
                <div class="card card-block sameheight-item" >
                     {!! Form::open(['route'=>'compra.store','method'=>'POST','class'=>'form-horizontal','id'=>'frm1','name'=>'frm1']) !!}
                        <br><br>
                        <div class="form-group">

                            <span class="col-md-1 col-md-offset-2 text-center">
                            <i class="fa fa-barcode bigicon"></i>
                            </span>
                            <div class="col-xs-3"> 
                             <input id="idcodproduc" name="idcodproduc" type="text" placeholder="Codigo de barra" class="form-control"> 
                            </div>
                        </div>
                        <br> 

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-book bigicon"></i>
                            </span>
                            <div class="col-md-3">
                            <input id="nomproducto" name="nomproducto" type="text" placeholder="Nombre del Producto" class="form-control">
                            </div>
                            <span class="col-md-1  text-center">
                            <i class="fa fa-credit-card bigicon"></i>
                            </span>
                            <div class="col-md-3">
                               <select class=" form-control" name="idProve" id="idProve">
                            <option>--Selecione un Proveedor--</option>
                            @foreach($prov as $prov1)

                                <option  value="{{ $prov1->id }}" >{{ $prov1->nom }}</option>
                            @endforeach
                           
                        </select> 
                            </div>
                        </div>
                                            <br>
                                              
                                                   
                    <div class="form-group">

                        <span class="col-md-1 col-md-offset-2 text-center">
                            <i class="fa fa-calendar bigicon"></i></span>
                            <div class="col-xs-3">
                            <input id="fechacompra" name="fechacompra" type="date" class="form-control" value="<?php echo dameFecha(date("Y-m-d"),0);?>"></div>
                    </div>
                    <br> 
                   
                     
                   
                    <div class="form-group"  >

                        <span class="col-md-1 col-md-offset-2 text-center">
                            <i class="fa fa-shopping-cart bigicon"></i></span>

                      <div class="col-xs-3">
                      <input id="cantcomp" name="cantcomp" type="text" placeholder="cantidad a comprar" class="form-control" onkeyup="sumar();">
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
                     <span class="col-md-1  text-center"><i class="fa fa-dollar bigicon"></i></span>
                      <div class="col-xs-3">
                      <input id="descompra" name="descompra" type="text" placeholder="Precio de compra unitario" class="form-control">
                      </div>
                     </div>
                     <br>
                     <div class="form-group" align="center">
                      <a id="bt_add" href="#" class="btn btn-info" >Agregar al carrito</a>
                     
                     </div>
                     <div class="form-group">                       
                      <div class="col-md-12" >
                      <div class="panel-body"> 
                                              
                            <div class="table-responsive" align="center" >
                             <br>
                                
                                <table id="tabla" class="table table-bordered">
                                    <thead valign="bottom" align="right" >
                                        <tr  class="warning">
                                            <th align="center" >#</th>
                                            <th align="center" >producto</th>
                                            <th align="center">cantidad</th>
                                            <th align="center" >precio</th>
                                            <th align="center" >Subtotal</th>
                                            <th align="center" >accion</th>
                                            
                                        </tr>
                                    </thead>
                                   
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
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-money bigicon"></i>
                                                </span>
                                                <div class="col-xs-3">
                                                    
                                                 
                                                    <select class="form-control" name="formap" id="formap">
                                                        <option >Seleccione tipo de pago</option>
                                                        <option value="Contado">Contado</option>
                                                        <option value="Credito">Credito </option>   
                                                    </select>
                                            
                                                </div>
                                               </div> 
                                            <br>
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-usd bigicon"></i>
                                                </span>
                                                <div class="col-xs-3">
                                                    
                                                  <input id="totalpagar" name="totalpagar" type="text" placeholder="Total apagar" disabled="true"class="form-control">
                                                  <input id="total" name="total" type="hidden" placeholder="Total apagar" class="form-control">

                                            
                                                 
                                                </div>
                                                   <span class="col-md-1  text-center"><i class="bigicon"style=" font-weight: bold;">#</i></span>
                                                  <div class="col-xs-3">
                                                 
                                             <input id="cuotas" name="cuotas" type="text" placeholder="Numero de cuotas" class="form-control">
                                                
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
  
@stop
<?php 
$time=time();
    
    function dameFecha($fecha,$dia){
        list($year,$mon,$day)=explode('-',$fecha);
        return date('Y-m-d',mktime(0,0,0,$mon,$day+$dia,$year));    
    }
   $total=0; 
function calculartotal(){
     
   
     return $total;
     }

  
?>
 @section('scripts')
{!! Html::script('js/bootstrap.js') !!}
{!! Html::script('js/jquery-3.1.1.js') !!}
{!! Html::script('js/subtotalauto.js') !!} 
 
<script type="text/javascript" charset="utf-8">
function sumar()
{
var a=document.frm1.cantcomp.value;
var b=document.frm1.preciocomp.value;
var c=(parseFloat(a)*parseFloat(b)).toFixed(4);
if(isNaN(a)){
   a=1;
  }
  if(isNaN(b)){
   b=1;
  }
  var c= a*b;
  if(isNaN(c)){
   c=0;
  }
 document.frm1.subtotalcomp.value=c.toFixed(4);
}

 $(document).ready(function(){
  $('#bt_add').click(function(){
   var a=parseFloat(document.frm1.subtotalcomp.value);
   var b=parseFloat(document.frm1.totalpagar.value);

if(isNaN(a)){
   a=0;
  }
  if(isNaN(b)){
   b=0;
  }
  b= a+b;
 document.frm1.total.value=b.toFixed(4);
 
document.frm1.totalpagar.value=b.toFixed(4);
   agregar();
  });
 });
 var cont=0;
 var id_fila_selected=[];
 function agregar(){
  cont++;
  var fila='<tr class="selected" id="fila'+cont+'" onclick="seleccionar(this.id);"><td></td><td>'+ document.frm1.nomproducto.value +'</td><td>' + document.frm1.cantcomp.value + '</td><td>'+ document.frm1.preciocomp.value+'</td><td>' +  document.frm1.subtotalcomp.value +'</td><td><a  onclick="eliminar(id_fila_selected);" id="bt_del" href="#"  class="btn btn-danger active">eliminar</a></td></tr>';
  $('#tabla').append(fila);
 
   document.frm1.cantcomp.value="";
  document.frm1.subtotalcomp.value="";
  document.frm1.nomproducto.value="";
  document.frm1.preciocomp.value="";
  reordenar();
  
 }
 function calculardatos(){
  
 }
 function seleccionar(id_fila){
  if($('#'+id_fila).hasClass('seleccionada')){
   $('#'+id_fila).removeClass('seleccionada');
  }
  else{
   $('#'+id_fila).addClass('seleccionada');
  }
  //2702id_fila_selected=id_fila;
  id_fila_selected.push(id_fila);
 }

 function eliminar(id_fila){
  /*$('#'+id_fila).remove();
  reordenar();*/
  for(var i=0; i<id_fila.length; i++){
   alert($(this).parent().children("td:eq(2)").text());
   $('#'+id_fila[i]).remove();
  }
  reordenar();
 }

 function reordenar(){
  var num=1;
  $('#tabla tbody tr').each(function(){
   $(this).find('td').eq(0).text(num);
   num++;
  });
 }
 function eliminarTodasFilas(){
$('#tabla tbody tr').each(function(){
   $(this).remove();
  });

 }
function cargarProduct(){


}
/* $(function () {
 
                $('#buscarpro').submit(function(e) {
                 e.preventDefault();
                });
                var route = "/escuela/"+value+"";
                var token = $("#token").val();//aqui recupero de mi variable toque para decirle a laravel no es intencionada
                $().keyup(function(){
                  var envio=$('#buscarpro').val();
                  $.ajax({
                           url: route,
                           headers: {'X-CSRF-TOKEN': token},
                           type: 'PUT',
                           data: 'id='+envio,
                         
                           success: function(res){
                                   if(res!=""){
                                    $('#resultado').html(res);
                                   }
                               }

                             }
                         });
                });
                }
*/

</script>
 @endsection