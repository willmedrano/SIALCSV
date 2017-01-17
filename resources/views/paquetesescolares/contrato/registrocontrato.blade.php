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
           <?php $message=Session::get('message')?>
                <div class='notifications top-left'></div>
                    @if($message=='store')
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Exito!!</strong> Contrado Realizado.
                        </div>
                    @endif        
        <div class="title-block">
            <span class=""><i class="fa fa-archive bigicon icon_nav" > Contratos con Escuela </i></span>
                <p class="title-description"> Registro de Contratos </p>
        </div>                
              
                        {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
                        {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
                        {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
                        {!!Html::style('assets/css/style.css')!!}  
                        {!!Html::style('assets/css/main-style.css')!!} 
              
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1 class="panel-title">Formulario de Contratos</h1>
            </div>
                <h2 align="center">Contratos</h2>
            <section class="section"> 
                <div>
                    <div class="card card-block sameheight-item">
                            
                            <?php $total=0;?>
                            @foreach($aux as $aux3)
                                <?php 
                                $total=$total+($aux3->descompra3);
                            ?>
                            @endforeach
                                                            
                            <!--Inicio de modal -->
                            
                            <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
                                
                                 <div class="modal-dialog" role="document">
                                    
                                    <div class="modal-content">
                                        
                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
                                            <h4 class="modal-title" id="gridModalLabel">Realizar Contrato</h4>
                                        
                                        </div>
                                        
                                        <div class="modal-body">
                                            
                                            <div class="container-fluid bd-example-row">
                                            
                                            {!! Form::open(['route'=>'contrato.store','method'=>'POST','class'=>'form-horizontal','id'=>'frm2','name'=>'frm2']) !!}
                                                
                                                <fieldset>

                                                    <div class="form-group">
                            
                                                        <span class="col-md-2  text-center" ><label >codigo: </label></span>
                                                        
                                                        <div class="col-md-6">
                                                            
                                                            <input id="codE" name="codE" type="text" placeholder="Codigo de la Escuela" class="form-control" value="" required>
                                    
                                                        </div>

                                                    </div>   


                                                    <div class="form-group">
                                                        
                                                        <span class="col-md-2  text-center" ><label >Centro Escolar: </label></span>
                                                        
                                                        <div class="col-md-6">
                                                            
                                                                <input id="nomP" name="nomP" type="text" placeholder="Nombre de la Escuela" class="form-control" value="" disabled>                                            
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                            
                                                        <span class="col-md-2  text-center">
                                                        <label >Fecha de entrega: </label></span>
                            
                                                        <div class="col-md-5">

                                                            <input id="cli1" name="cli1" type="date" placeholder="" class="form-control" value="<?php echo dameFecha(date("Y-m-d"),0);?>" required>  
                                                            <input type="hidden" id="cli" name="cli" value="<?php echo dameFecha(date("Y-m-d"),0);?>">

                                                        </div>

                                                    </div>
                                                    
                                                    <div class="form-group">
                            
                                                        <span class="col-md-2  text-center">
                                                        <label >Fecha: </label></span>
                            
                                                        <div class="col-md-5">

                                                            <input id="fecha1" name="fecha1" type="date" placeholder="" class="form-control" value="<?php echo dameFecha(date("Y-m-d"),0);?>" disabled>
                                                            <input type="hidden" id="fecha" name="fecha" value="<?php echo dameFecha(date("Y-m-d"),0);?>">  
                                          
                                                        </div>

                                                    </div>
                        
                                                    <div class="form-group">
                                                    
                                                        <span class="col-md-2  text-center"><label >Sub-Total: </label></span>
                                                    
                                                        <div class="col-xs-5">
                                                            
                                                             <input id="tipo" name="tipo" type="text" placeholder="sub-total" class="form-control" value="<?php echo round(($total-($total*0.13)),2);
                                                            ?>" disabled>
                                                        
                                                        </div>
                                                    
                                                    </div>

                                                    <div class="form-group">
                            
                                                        <span class="col-md-2  text-center"><label >Iva: </label></span>
                            
                                                        <div class="col-md-3">
                                                            
                                                            <input id="iva2" name="iva2" type="text" placeholder="IVA agregado " class="form-control" value="<?php echo round(($total*0.13),2);
                                                            ?>" disabled>
                                                            <input type="hidden" id="iva" name="iva" value="<?php echo round(($total*0.13),2);
                                                            ?>">
              
                                                        </div>
                           
                                                        <span class="col-md-5  text-center"  ><i class="fa fa-pencil-square-o fa-3x fa-fw bigicon"></i></span>
                                                    
                                                    </div>

                                                    <div class="form-group">
                            
                                                        <span class="col-md-2  text-center"><label >Total: </label></span>
                                                        
                                                        <div class="col-xs-5">

                                                            <input id="total1" name="total1" type="text" placeholder="Total a pagar" class="form-control" value="<?php echo $total;
                                                            ?>" disabled>
                                                            <input type="hidden" id="total" name="total" value="<?php echo $total;
                                                            ?>">
                                            
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        
                                                        <span class="col-md-2 text-center"><label >Descripción:</label></span>
                            
                                                        <div class="col-md-7">
                                              
                                                            <textarea rows="2" class="form-control" id="des" name="des" placeholder="Agregue la descripción del Contrato" rows="7" required></textarea>
                                                        
                                                         </div>

                                                    </div>    
                                                
                                                </fieldset>
                                             
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            
                                            <button type="submit" class="btn btn-primary">Aceptar</button>
                                        
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>


                            
                            <!-- fin del modal 2-->

                            {!! Form::open(['route'=>'aux3.store','method'=>'POST','class'=>'form-horizontal' ,'id'=>'frm1','name'=>'frm1']) !!}

                                <br><br>
                                
                                <div class="form-group" id="aux">

                                    <span class="col-md-1 col-md-offset-2 text-center">
                                    
                                    <i class="fa fa-barcode bigicon"></i>
                                    
                                    </span>

                                    <div class="col-xs-3"> 

                                        <input id="idcodproduc" name="idcodproduc" type="text" required placeholder="Codigo de Barra del Paquete" class="form-control" > 
                                                                           
                                         </div>
                                    
                                </div>
                                
                                <br>
                                
                                <div class="form-group">

                                    <span class="col-md-1 col-md-offset-2 text-center">
                                    <i class="fa fa-clipboard bigicon"></i>
                                    </span>
                                                 
                                    <div class="col-xs-3">
                                        
                                        <input   id="nomproducto" name="nomproducto1" required type="text" disabled="" placeholder="Nombre del Paquete" class="form-control">
                                    </div>
                                    
                                    <span class="col-md-1  text-center">
                                    <i class="fa fa-truck bigicon"></i>
                                    </span>
                                    
                                    <div class="col-xs-3">
                                        
                                        <select disabled class=" form-control" name="idProve" id="idProve">
                                                
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
 
                                        <input id="cajavender" name="cajavender" type="text" required placeholder="Paquetes a Vender"  class="form-control" autocomplete="off">
                                        <input type="hidden" name="cajadisp" id="cajadisp" value="">
                                        <span id="cajavendertexto"></span>
                                        </p>  
                                    </div>
                                    
                                    

                                </div>
                                
                                <br>
                                            
                                <div class="form-group">
                                    
                                    <span class="col-md-1 col-md-offset-2 text-center">
                                    <i class="fa fa-dollar (alias) bigicon"></i>
                                    </span>

                                    <div class="col-xs-3">
                                        
                                        <input id="subtotalventa" name="subtotalventa" type="text" placeholder="subtotal" class="form-control" disabled="true" required>
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
                                                        <th align="center" >Producto</th>
                                                        <th align="center">Cantidad de Paquetes</th> 
                                                        <th align="center" >Subtotal</th>
                                                        <th align="center" >Acción</th>

                                                    </tr>
                                                
                                                </thead>
                                                
                                                
                                                
                                                <tbody>
                                        
                                                    <?php $cont=0; $p=0?>
                                                    @foreach($aux as $aux2)
                                                    

                                                    <tr>
                                                        <td><?php $cont++;  echo $cont; ?></td>
                                                        <td>{{ $aux2->nomProd }}</td>
                                                        <td>{{ $aux2->cancompra3 }}</td>  
                                                        <td>
                                                           <?php 
                                                           $d=$aux2->descompra3;
                                                           echo $d;
                                                            ?>
                                                        </td>
                                                                                                                
                                                        <td>
                                                            {!!Form::open(['route'=>['aux3.destroy',$aux3->id],'method'=>'DELETE'])!!}
                                                                <input type="submit" name="elimina" value="Eliminar"   class="btn btn-danger active " >
                                                            {!!Form::close()!!}   

                                                        </td>
                                                         
                                                       
                                                    </tr>
                                                  
                                                  
                                                      @endforeach
                                                
                                                </tbody>
                                                <tfoot>
                                                    
                                                    <tr align="center">
                                                       
                                                        <td colspan="4"><p style="font-weight: bold;">Total</p></td>
                                                        <td colspan="1" ><p style="font-weight: bold;">$ <?php echo $total ?></p></td>
                                                        

                                                    </tr>
                                                
                                                </tfoot>
                                            
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

                                <br>
                                <br>    <br>
                                  @foreach($aux as $aux2)
                                   <?php echo '<br>';echo '<br>'; echo '<br>'; ?>
                                
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


<?php if ( $total==0 ) { 
 
/*aquí picamos el código HTML*/
 

                echo '<button   class="btn btn-lg btn-primary active" disabled data-toggle="modal" data-target="#gridSystemModal">Facturar</button>';

       
                
        } 
    else{
         echo '<button   class="btn btn-lg btn-primary active"  data-toggle="modal" data-target="#gridSystemModal">Facturar</button>';

    }
        ?>
            </div>                  
        </div>

    

        


        
                                             

  
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
    
            

<script type="text/javascript" charset="utf-8">

var cantidadunitariap=0;//es para tener unidades que tiene la tienda para vender

var cantidadcajap=0;//es para tener las cajas disponibles
var cajasvender2=0;//es para tener las cajas disponibles

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
var h=0;
var w=0;
var z=0;
 $(document).ready(function(){
$('#aux').on('change','#idcodproduc',function (){
  
    var producto=$("#idcodproduc").val();//aqui se extrae los datos digitados por el usuario es decir el codigo del producto

    var ruta="/llenadoProducto3/"+producto;//Aqui busca de los productos registrados si se tiene ese codigo y lo busca para venderlo

    var ruta1="/preciodelpaquete/"+producto;//este es para buscar las excistencias de productos en caja
    
    //var ruta2="/VerificarEPUnidades/"+producto;//este es para buscar las excistencias de productos en unidades



        $("#hprod").val("");
       $("#nomproducto").val("");
       $("#idProve").val(0); 
        $("#idcodproduc").val("");
        $("#cajavender").val("");
       //$("#unidadesvender").val("");
       $("#cajavendertexto").val("");
      // $("#unidadesvendertexto").val("");
       

        valido = document.getElementById('cajavendertexto');
        valido.innerText = "";
        $("#subtotalventa").val(0.0); 
        $("#subtotal").val(0.0); 
        //valido1 = document.getElementById('unidadesvendertexto');

            
       cantidadunitaria=0;
       cantformacaja=0;
       ganancia_unidad=0;
       ganacia_caja=0;
       costoPromedio=0;


 $.get(ruta, function(res){
  $(res).each(function(key,value){

        
    if (value.estado==true) {
        $("#idcodproduc").val(producto);
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
    
           
            
            //cantidadcajap= value.cancompra;
            cantidadunitariap = value.canlote;

         }); 
    });
     
     
    
});
  
 });

document.getElementById('cajavender').addEventListener('input', function()//aqui se ejecuta cuando el usuario digita le muestra la cantidad.. de producto disponible..
 {

    //var producto1=$("#idcodproduc").val();

     //var ruta="/VerificarEPCaja/"+producto1;
   // $("#unidadesvender").val(0);
   
   if(isNaN(cantidadunitariap))
{
    $("#cajavender").val("");
    $("#subtotalventa").val("");
    $("#subtotal").val("");
}
else{
     cantidadcajap= ((parseInt(cantidadunitariap)) / (parseInt(cantformacaja)));


    cajasvender = event.target;
    cantidadcajap=Math.floor(cantidadcajap);
     cajasvender2=cajasvender.value;
    cajasvender2= ((parseFloat(cajasvender2)) * (parseFloat(cantformacaja)));
     if(cajasvender.value>cantidadcajap){//es para validar que solo las cajas que estan disponibles o estan existencia
            $("#cajavender").val(cantidadcajap);
           /* valido.innerText = "Cantidad de cajas disponibles: "+cantidadcajap;
         valido.style.color = 'green';   */ 
          precioporcaja=(parseFloat(costoPromedio) * (parseFloat(ganacia_caja) / 100));
            precioporcaja=parseFloat(precioporcaja) + parseFloat(costoPromedio);
            subcaja= parseFloat(cajasvender.value) * parseFloat(precioporcaja);
 //es una variable oculta que nos sirve para enviar datos ocultos
 subcajaredondeada=subcaja.toFixed(2);
                    if(isNaN(subcajaredondeada))
                    {
                        subcajaredondeada=0.0;// numero de unidades que vamos a vender en forma de caja
                        $("#cajavender").val(0);
                    }

                    
                    subtotalvender=parseFloat(subcajaredondeada);
                    $("#subtotalventa").val(subtotalvender);
                    $("#subtotal").val(subtotalvender);
                    valido.innerText = "Cantidad máxima de paquetes: "+ cantidadcajap +" el monto es: "+subcajaredondeada;
                    valido.style.color = 'green';
                    h= (parseInt( cantidadunitariap) - parseInt(cajasvender2))
                    //valido1.innerText = "Cantidad en unidades disponibles: "+ 0;

         }
      
     else if(cajasvender.value<0){//es para validar que solo se escriban numeros positivo
            $("#cajavender").val(0);
            precioporcaja=(parseFloat(costoPromedio) * (parseFloat(ganacia_caja) / 100));
            precioporcaja=parseFloat(precioporcaja) + parseFloat(costoPromedio);
            subcaja= parseFloat(cajasvender.value) * parseFloat(precioporcaja);
 //es una variable oculta que nos sirve para enviar datos ocultos
                    subcajaredondeada=subcaja.toFixed(2);
                    if(isNaN(subcajaredondeada))
                    {
                        subcajaredondeada=0.0;// numero de unidades que vamos a vender en forma de caja
                        $("#cajavender").val(0);
                    }

                    
                    subtotalvender=parseFloat(subcajaredondeada);
                    $("#subtotalventa").val(subtotalvender);
                    $("#subtotal").val(subtotalvender);
                    valido.innerText = "No ingrese negativos.. el monto es: "+subcajaredondeada;
                    valido.style.color = 'green';
                    h= (parseInt( cantidadunitariap) - parseInt(cajasvender2))
                    //valido1.innerText = "Cantidad en unidades disponibles: "+ cantidadunitariap;

         }else if(cajasvender.value<=cantidadcajap){//es para validar que solo las cajas que estan disponibles o estan existencia



            precioporcaja=(parseFloat(costoPromedio) * (parseFloat(ganacia_caja) / 100));
            precioporcaja=parseFloat(precioporcaja) + parseFloat(costoPromedio);
            subcaja= parseFloat(cajasvender.value) * parseFloat(precioporcaja);
 //es una variable oculta que nos sirve para enviar datos ocultos
 subcajaredondeada=subcaja.toFixed(2);
                    if(isNaN(subcajaredondeada))
                    {
                        subcajaredondeada=0.0;// numero de unidades que vamos a vender en forma de caja
                       // $("#cajavender").val(0);
                    }

            

             subtotalvender=parseFloat(subcajaredondeada);
                    $("#subtotalventa").val(subtotalvender);
                    $("#subtotal").val(subtotalvender);

                    valido.innerText = "Cantidad de Paquetes el monto es: "+subcajaredondeada;
                    valido.style.color = 'blue';
                    if(isNaN(cajasvender2))
                    {
                        cajasvender2=0;// numero de unidades que vamos a vender en forma de caja
                    }
                    h= (parseInt( cantidadunitariap) - parseInt(cajasvender2))
                    //valido1.innerText = "Cantidad en unidades disponibles: "+ h;

         } 
         
     w=subcajaredondeada;
        }
      }); 

     
//});

document.getElementById('codE').addEventListener('input', function()//aqui se ejecuta cuando el usuario digita le muestra la cantidad.. de producto disponible..
 {
    var p=event.target;
    p2=p.value;
     $("#nomP").val("");
   if( p.value<=0 || p.value>=10000 )
    { 
          $("#codE").val("");
          $("#nomP").val("");   
    }
    else if(p.value>0){
    
            var ruta2="/llenadoProductopaquetes/"+p.value;

            $.get(ruta2, function(res){
            $(res).each(function(key,value){


            $("#nomP").val(value.nomesc);
            //$("#clien").val("cliente sin mensualidad")
            }); 
        }); 


}
});



function stopRKey(evt) {
var evt = (evt) ? evt : ((event) ? event : null);
var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
if ((evt.keyCode == 13) && (node.type=="text")) {return false;}
}
document.onkeypress = stopRKey; 


    </script>
  @endsection

  