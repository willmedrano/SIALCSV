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
h2,h1,span
{
    color: #36A0FF;

}
.title{
  font-size: 25px;  
}
 .title-description{
   font-size: 0px;   
 } 
 .gris{
    background:#8c8c8c; 
    color:white;
}  
</style>
   
               
                
   <article class="content forms-page">         
                   
        <div class="title-block">
            <span class=""><i class="fa fa-archive bigicon icon_nav" > Ventas </i></span>
                <p class="title-description"> Registro de VENTAS </p>
        </div>                
              
                        {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
                        {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
                        {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
                        {!!Html::style('assets/css/style.css')!!}  
                        {!!Html::style('assets/css/main-style.css')!!} 
              
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1 class="panel-title">Formulario de Ventas</h1>
            </div>
                <h2 align="center">Ventas</h2>
            <section class="section"> 
                <div>
                    <div class="card card-block sameheight-item">
                            
                            
                            <!--Inicio de modal -->
                            
                            <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
                                
                                 <div class="modal-dialog" role="document">
                                    
                                    <div class="modal-content">
                                        
                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
                                            <h4 class="modal-title" id="gridModalLabel">Realizar Venta</h4>
                                        
                                        </div>
                                        
                                        <div class="modal-body">
                                            
                                            <div class="container-fluid bd-example-row">
                                            
                                            <form class="form-horizontal" method="post">
                                                
                                                <fieldset>

                                                    <div class="form-group">
                            
                                                        <span class="col-md-2  text-center" ><label ># Factura: </label></span>
                                                        
                                                        <div class="col-md-6">
                                                            
                                                            <input id="nomP" name="nomP" type="text" placeholder="Correlativo de la factura" class="form-control" >
                                
                                                        </div>

                                                    </div>   


                                                    <div class="form-group">
                                                        
                                                        <span class="col-md-2  text-center" ><label >Nombre: </label></span>
                                                        
                                                        <div class="col-md-6">
                                                            <input id="nomP" name="nomP" type="text" placeholder="Nombre del Cliente" class="form-control" >
                                
                                                        </div>

                                                    </div>
                                                    
                                                    <div class="form-group">
                            
                                                        <span class="col-md-2  text-center">
                                                        <label >Descuento: </label></span>
                            
                                                        <div class="col-md-5">

                                                            <input id="nomP" name="nomP" type="text" placeholder="% de descuento" class="form-control">  
                                                        
                                                        </div>

                                                    </div>
                        
                                                    <div class="form-group">
                                                    
                                                        <span class="col-md-2  text-center"><label >Sub-Total: </label></span>
                                                    
                                                        <div class="col-xs-5">
                                                            
                                                             <input id="tipo" name="tipo" type="text" placeholder="sub-total" class="form-control">
                                                        
                                                        </div>
                                                    
                                                    </div>

                                                    <div class="form-group">
                            
                                                        <span class="col-md-2  text-center"><label >Iva: </label></span>
                            
                                                        <div class="col-md-3">
                                                            
                                                            <input id="marca" name="marca" type="text" placeholder="IVA agregado " class="form-control">

                                                        </div>
                           
                                                        <span class="col-md-5  text-center"  ><i class="fa fa-pencil-square-o fa-3x fa-fw bigicon"></i></span>
                                                    
                                                    </div>

                                                    <div class="form-group">
                            
                                                        <span class="col-md-2  text-center"><label >Total: </label></span>
                                                        
                                                        <div class="col-xs-5">

                                                            <input id="tipo" name="tipo" type="text" placeholder="Total a pagar" class="form-control">
                                                        
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        
                                                        <span class="col-md-2 text-center"><label >Descripción:</label></span>
                            
                                                        <div class="col-md-7">
                                                            
                                                            <textarea rows="2" class="form-control" id="message" name="message" placeholder="Agregue la descripcion de la venta" rows="7"></textarea>
                                                        
                                                         </div>

                                                    </div>    
                                                
                                                </fieldset>
                                            </form>
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            
                                            <button type="button" class="btn btn-primary">Vender</button>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Inicio de modal -->

                            <div id="gridSystemModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">

                                <div class="modal-dialog" role="document">
    
                                    <div class="modal-content">
                                        
                                        <div class="modal-header">
                                            
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    
                                                    <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
                                                    <h4 class="modal-title" id="gridModalLabel2">Realizar Venta Sin Factura</h4>
                                        </div>

                                        <div class="modal-body">
        
                                            <div class="container-fluid bd-example-row">
                                            
                                            <form class="form-horizontal" method="post">
                                                
                                                <fieldset>
                        
                                                    <div class="form-group">
                                                        <span class="col-md-2  text-center"><label >Descuento: </label></span>
                                                        
                                                        <div class="col-md-5">
                                
                                                            <input id="nomP" name="nomP" type="text" placeholder="% de descuento" class="form-control">  
                                                        
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        
                                                        <span class="col-md-2  text-center"><label >Sub-Total: </label></span>
                                                        
                                                        <div class="col-xs-5">
                                
                                                            <input id="tipo" name="tipo" type="text" placeholder="sub-total" class="form-control">
                                                         
                                                         </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        
                                                        <span class="col-md-2  text-center"><label >Iva: </label></span>
                                                        
                                                        <div class="col-md-3">
                                                            
                                                            <input id="marca" name="marca" type="text" placeholder="IVA agregado " class="form-control">

                                                        </div>
                                                        
                                                        <span class="col-md-5  text-center"  ><i class="fa fa-pencil-square-o fa-3x fa-fw bigicon"></i></span>
                                                   
                                                    </div>
                                                    
                                                    <div class="form-group">
                            
                                                        <span class="col-md-2  text-center"><label >Total: </label></span>
                                                        
                                                        <div class="col-xs-5">
                                
                                                            <input id="tipo" name="tipo" type="text" placeholder="Total a pagar" class="form-control">
                                                        </div>

                                                    </div>
                                                    
                                                    <div class="form-group">
                            
                                                        <span class="col-md-2 text-center"><label >Descripción:</label></span>
                                                        
                                                        <div class="col-md-7">
                                                            
                                                            <textarea rows="2" class="form-control" id="message" name="message" placeholder="Agregue la descripcion de la venta" rows="7"></textarea>
                                                        
                                                        </div>
                                                    </div>    
                                                
                                                </fieldset>

                                            </form>
                                            </div>

                                        </div>
                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            
                                            <button type="button" class="btn btn-primary">Vender</button>
                                        
                                        </div>
                                    
                                    </div>
                                </div> 
                            </div>
                            
                            <!-- fin del modal 2-->

                            {!! Form::open(['route'=>'aux4.store','method'=>'POST','class'=>'form-horizontal' ,'id'=>'frm1','name'=>'frm1']) !!}

                                <br><br>
                                
                                <div class="form-group" id="aux">

                                    <span class="col-md-1 col-md-offset-2 text-center">
                                    
                                    <i class="fa fa-barcode bigicon"></i>
                                    
                                    </span>

                                    <div class="col-xs-3"> 

                                        <input id="idcodproduc" name="idcodproduc" type="text" placeholder="Codigo de barra" class="form-control" > 
                                                                           
                                         </div>
                                    
                                </div>
                                
                                <br>
                                
                                <div class="form-group">

                                    <span class="col-md-1 col-md-offset-2 text-center">
                                    <i class="fa fa-clipboard bigicon"></i>
                                    </span>
                                                 
                                    <div class="col-xs-3">
                                        
                                        <input   id="nomproducto" name="nomproducto1" required type="text" disabled="" placeholder="Nombre del Producto" class="form-control">
                                    </div>
                                    
                                    <span class="col-md-1  text-center">
                                    <i class="fa fa-truck bigicon"></i>
                                    </span>
                                    
                                    <div class="col-xs-3">
                                        
                                        <select disabled class=" form-control" name="idProve" id="idProve">
                                            
                                            <option>--Seleccione un Proveedor--</option>
                                                
                                            @foreach($prov as $prov1)

                                            <option  value="{{ $prov1->id }}" >{{ $prov1->nom }}</option>
                                                
                                            @endforeach 

                                        </select>

                                    </div>

                                </div>
                                 <input type="hidden"  name="hdes" id="hdes" value="0">
                                <input type="hidden"  name="hprod" id="hprod" value="">
                         
                                <br>

                                <div class="form-group">

                                    <span class="col-md-1 col-md-offset-2 text-center">
                                    <i class="fa fa-dropbox bigicon"></i>
                                    </span>

                                    <div class="col-xs-3">
                                          
                                        <p>
 
                                        <input id="cajavender" name="cajavender" type="text" required placeholder="Cajas a Vender"  class="form-control" >
                                        <input type="hidden" name="cajadisp" id="cajadisp" value="">
                                        <span id="cajavendertexto"></span>
                                        </p>  
                                    </div>
                                    
                                    <span class="col-md-1 text-center">
                                    <i class="fa bigicon">U</i>
                                    </span>
                                    
                                    <div class="col-xs-3">
                                        <p>
                                        <input id="unidadesvender" name="unidadesvender" required type="text" placeholder="Unidades a Vender" class="form-control"  >
                                        <span id="unidadesvendertexto"></span>
                                        </p>        
                                    </div>

                                </div>
                                
                                <br>
                                            
                                <div class="form-group">
                                    
                                    <span class="col-md-1 col-md-offset-2 text-center">
                                    <i class="fa fa-dollar (alias) bigicon"></i>
                                    </span>

                                    <div class="col-xs-3">
                                        
                                        <input id="subtotalventa" name="subtotalventa" type="text" placeholder="subtotal" class="form-control" disabled="true">
                                        <input type="hidden" name="subtotal" id="subtotal" value="0">
                                    
                                    </div>
                                                
                                </div>
                                
                                <br>

                                <div class="form-group" align="center">
                                    
                                    <input type="submit" id="bt_add" href="#" class="btn btn-info" value="Agregar al carrito">
                                
                                </div>
                            
                            {!! Form::close() !!}    
                            <br>
                            <div class="form-group">
                                               
                                <div class="col-md-12">
                                    
                                    <div class="panel-body"> 
                                              
                                        <div class="table-responsive" align="center">
                                                        
                                            <br>
                                            
                                            <table class="table  table-bordered table-hover" id="dataTables-example">
                                    
                                                <thead valign="bottom" align="right">
                                                    
                                                    <tr  class="warning" align="center">
                                                        <th align="center" >#</th>
                                                        <th align="center" >producto</th>
                                                        <th align="center">cantidad</th>
                                                        <th align="center" >precio</th>
                                                        <th align="center" >Subtotal</th>
                                                        <th align="center" colspan="2" >accion</th>

                                                    </tr>
                                                
                                                </thead>
                                                
                                                <tfoot>
                                                    
                                                    <tr align="center">
                                                       
                                                        <td colspan="4"><p style="font-weight: bold;">Total</p></td>
                                                        <td colspan="1" ><p style="font-weight: bold;">$ 200</p></td>
                                                        <td colspan="1" align="left"></td>

                                                    </tr>
                                                
                                                </tfoot>
                                                
                                                <tbody>
                                        
                                                    <?php $cont=0; $p=0?>
                                                    @foreach($aux as $aux2)
                                                    

                                                    <tr>
                                                        <td><?php $cont++;  echo $cont; ?></td>
                                                        <td>{{ $aux2->nomProd }}</td>
                                                        <td>{{ $aux2->preciocomp3 }}</td>
                                                        <td>{{ $aux2->cancompra3 }}</td>
                                                        <td>
                                                           <?php
                                                           $d=$aux2->descompra3;
                                                           echo $d;
                                                            ?>
                                                        </td>
                                                                                                                
                                                        <td>
                                                            {!!Form::open(['route'=>['aux4.destroy',$aux2->id],'method'=>'DELETE'])!!}
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
                                <div>
                                  @foreach($aux as $aux2)
                                   <?php echo '<br>'; echo '<br>';echo '<br>';echo '<br>';echo '<br>';?>
                                   @endforeach
                                  
                                   
                                   <br>
                                   <br>  
                                   <br>
                                   <br>     
                                   <br> 
                                   <br>      
                                </div>    
                        </div>     
                </div>
           </section> 

        </div>
   

        <div class="form-group">
            <div class="col-md-12 text-center" align="center">
                <button   class="btn btn-lg btn-primary active" data-toggle="modal" data-target="#gridSystemModal">Facturar</button>

                <button   class="btn gris btn-lg" data-toggle="modal" data-target="#gridSystemModal2">Sin Facturar</button>
            </div>                  
        </div>
                                             

  
@endsection
  @section('scripts')
    
            

<script type="text/javascript" charset="utf-8">

var cantidadunitariap=0;//es para tener unidades que tiene la tienda para vender

var cantidadcajap=0;//es para tener las cajas disponibles

var canttotalventasub=0;//es para ir acumulando la cantidad a vender en caja

var cantformacaja=0;//es para saber cuantos productos conforman una caja

var contadorcajas=0;//es para tener un control de los productos que conforman la caja

var contadorunidades=0;//es para tener un control de los productos que conforman la unidades

var ganancia_unidad=0;//Aqui tenemos un control en ganacias por unidades

var ganacia_caja=0;//Aqui tenemos un control en ganacias por cajas

var costoPromedio=0;//para tener mas especificado cuando costara el producto

var precioporcaja=0;//segun calculado cpromedio, gCaja 

var precioporunidad=0;//segun calculado cpromedio, gunidades

var subcaja=0;//para tener un control de solo las ventas por caja.

var subcajaredondeada=0;//es para que en esta variable se guarde el precio de la caja redondeada

var subunidad=0;//para tener un control de solo las ventas por unidad.
var  idprods=0;
var subunidadredondeada=0;//es para que en esta variable se guarde el precio de la unidad redondeada

var division_d_caja=0;//Es para poder hacer una division entre las unidades y las cajas

var subtotalvender=0;//es para que los muestre el total avender

 $(document).ready(function(){
$('#aux').on('change','#idcodproduc',function (){
  
    var producto=$("#idcodproduc").val();//aqui se extrae los datos digitados por el usuario es decir el codigo del producto

    var ruta="/llenadoProducto2/"+producto;//Aqui busca de los productos registrados si se tiene ese codigo y lo busca para venderlo

    var ruta1="/VerificarEPCaja/"+producto;//este es para buscar las excistencias de productos en caja
    
    //var ruta2="/VerificarEPUnidades/"+producto;//este es para buscar las excistencias de productos en unidades






 $.get(ruta, function(res){
  $(res).each(function(key,value){
    if (value.estado==true) {
       $("#hprod").val(value.id);
       $("#nomproducto").val(value.nomProd);
       $("#idProve").val(value.idProve);
       cantformacaja=value.uniCaja;
       ganancia_unidad=value.gUni;
       ganacia_caja=value.gCaja;
       costoPromedio=value.cPromedio;

       //variable reinicandolas

       contadorcajas=0;
       contadorunidades=0;
       division_d_caja=0;
       }
      else{
        $("#hprod").val("");
       $("#nomproducto").val("");
       $("#idProve").val(0);  
        cantformacaja=0;
       
      }

      }); 
 });
//incorpora la otra funcion
$.get(ruta1, function(res1){
        
        $(res1).each(function(key,value){
    
           
            $("#ids").val(value.idprodsl);
            //cantidadcajap= value.cancompra;
            cantidadunitariap = value.canlote;

         }); 
    });
     
     //incorpora la otra funcion

    
});
  
 });

document.getElementById('cajavender').addEventListener('input', function()//aqui se ejecuta cuando el usuario digita le muestra la cantidad.. de producto disponible..
 {
    var producto1=$("#idcodproduc").val();

     var ruta="/VerificarEPCaja/"+producto1;
    
     //cantidadcajap=(parseFloat(cantidadunitariap)) / (parseFloat(cantformacaja));

    cajasvender = event.target;
     
    valido = document.getElementById('cajavendertexto');

     $.get(ruta, function(res){
  $(res).each(function(key,value){
      
      if(value.cancompra==0){//verifica que si el numero es igual a cero

        valido.innerText = "No hay cajas disponibles ";
         valido.style.color = 'red';

      }else if(value.cancompra!=0){///Es para saber si el digito que se digito es diferente de cero

         valido.innerText = "Cantidad de cajas disponibles: "+value.cancompra;
         valido.style.color = 'green';

         if(cajasvender.value>cantidadcajap){//es para validar que solo las cajas que estan disponibles o estan existencia

            valido.innerText = "Cantidad de cajas exede el # disponibles ";
            valido.style.color = 'red';

         } else if(cajasvender.value<0){//es para validar que solo se escriban numeros positivo

            valido.innerText = "Error es solo números positivos";
            valido.style.color = 'red';

         }else{//Si son numero validos pasa parte donde se calculara el precio de ese producto a vender
            

            precioporcaja=(parseFloat(costoPromedio) * (parseFloat(ganacia_caja) / 100));

            precioporcaja=parseFloat(precioporcaja) + parseFloat(costoPromedio);

            subcaja= parseFloat(cajasvender.value) * parseFloat(precioporcaja);

            subcajaredondeada=subcaja.toFixed(2);

            if(isNaN(subcajaredondeada)){//es una validacion por si esta vacio el campo de texto cajas a vender

            valido.innerText = "Ingrese las Cantidades a Vender ";
            valido.style.color = 'blue';
            if(isNaN(subunidadredondeada)){
                    $("#subtotalventa").val(0.0); 
                    $("#subtotal").val(0.0); //es una variable oculta que nos sirve para enviar datos ocultos
                    
            }else{ 
            subtotalvender=parseFloat(subunidadredondeada);
            $("#subtotalventa").val(subtotalvender);
            $("#subtotal").val(subtotalvender); //es una variable oculta que nos sirve para enviar datos ocultos
            }
           }else{
              if(subcajaredondeada==0){

                    valido.innerText = "No hay cajas disponibles cero";
                    valido.style.color = 'red';

              }else{
                     valido.innerText = "Cantidad de cajas el monto es: "+subcajaredondeada;
                     valido.style.color = 'black';
                     if(isNaN(subunidadredondeada)){

                        subtotalvender=parseFloat(subcajaredondeada);

                    $("#subtotalventa").val(subtotalvender);
                    $("#subtotal").val(0.0); //es una variable oculta que nos sirve para enviar datos ocultos

                     }else{

                     subtotalvender=parseFloat(subcajaredondeada)+parseFloat(subunidadredondeada);
                    $("#subtotalventa").val(subtotalvender);
                    $("#subtotal").val(subtotalvender); //es una variable oculta que nos sirve para enviar datos ocultos

                    }
                }

            }
         }
         
      }

      }); 
  });
     
});

document.getElementById('unidadesvender').addEventListener('input', function()//aqui se ejecuta cuando el usuario digita le muestra la cantidad.. de producto disponible..
 {
    var producto2=$("#idcodproduc").val();

    var ruta1="/VerificarEPUnidades/"+producto2;
    
    unidadesvender = event.target;

    valido = document.getElementById('unidadesvendertexto');

    var cajacalculo=document.getElementById('cajavender');

     $.get(ruta1, function(res){
  $(res).each(function(key,value){
      
         valido.innerText = "Cantidad en unidades disponibles: "+value.canlote;

        if(unidadesvender.value > cantidadunitariap)
        {
          valido.innerText = "Cantidad de unidades exede el # disponibles ";
            valido.style.color = 'red';          
        }else if(unidadesvender.value < 0)
        {
            valido.innerText = "Error es solo números positivos";
            valido.style.color = 'red';  

        }else{

             division_d_caja=parseFloat(unidadesvender.value) % parseFloat(cantformacaja);//es para determinar si es caja unidad
             
                contadorunidades=0;
           
                precioporunidad=((parseFloat(costoPromedio) / parseFloat(cantformacaja)) * (parseFloat(ganancia_unidad) / 100));

                precioporunidad=parseFloat(precioporunidad) + (parseFloat(costoPromedio) / parseFloat(cantformacaja));

                subunidad= parseFloat(unidadesvender.value) * parseFloat(precioporunidad);

                subunidadredondeada=subunidad.toFixed(2);

           if(isNaN(subunidadredondeada)){

            valido.innerText = "Ingrese las Cantidades a Vender ";
            valido.style.color = 'blue';
            if(isNaN(subcajaredondeada)){
                    $("#subtotalventa").val(0.0); 
                    $("#subtotal").val(0.0); //es una variable oculta que nos sirve para enviar datos ocultos
            }else{
            subtotalvender=parseFloat(subcajaredondeada);
            $("#subtotalventa").val(subtotalvender);
            $("#subtotal").val(subtotalvender); //es una variable oculta que nos sirve para enviar datos ocultos 
            }
           }else{
               if(subunidadredondeada==0){

                    valido.innerText = "No hay unidades disponibles ";
                    valido.style.color = 'red';

               }else{
                        valido.innerText = "Cantidad de unidads el monto es: "+subunidadredondeada;
                        valido.style.color = 'black';
                        
                        if(isNaN(subcajaredondeada)){

                            subtotalvender=parseFloat(subunidadredondeada);
                            $("#subtotalventa").val(subtotalvender);
                            $("#subtotal").val(0.0); //es una variable oculta que nos sirve para enviar datos ocultos
                        
                        }else{

                        subtotalvender=parseFloat(subcajaredondeada)+parseFloat(subunidadredondeada);
                        $("#subtotalventa").val(subtotalvender);
                        $("#subtotal").val(subtotalvender); //es una variable oculta que nos sirve para enviar datos ocultos
                        }
                    }
             }
         
        }
      }); 
  });
     
});

function stopRKey(evt) {
var evt = (evt) ? evt : ((event) ? event : null);
var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
if ((evt.keyCode == 13) && (node.type=="text")) {return false;}
}
document.onkeypress = stopRKey; 


    </script>
  @endsection