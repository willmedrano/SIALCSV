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
</style>
   
               
                
                <article class="content forms-page" >

                  
                   
                    <div class="title-block">
                    <span class=""><i class="fa fa-archive bigicon icon_nav" > Ventas </i></span>
                        <h2 >
        
    </h2>
                        <p class="title-description"> Registro de Producto </p>
                    </div>
                      
                    <section class="section">
                        <div class="row sameheight-container">
                            <div >
                                <div class=\ >
                                    

                       {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
                    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
                    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
                    {!!Html::style('assets/css/style.css')!!}  
                    {!!Html::style('ssets/css/main-style.css')!!} 


                
<div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title">Formulario de producto</h1>

                             </div>
                             <div align="center">
                             <h2 align="center"> Producto </h2> 
                             <br>
</div>
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
                            <span class="col-md-2  text-center" ><label >Nombre: </label></span>
                            <div class="col-md-6">
                                <input id="nomP" name="nomP" type="text" placeholder="Nombre del Cliente" class="form-control" >
                                
                            </div>
                        </div>
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
                            <span class="col-md-5  text-center"  ><i class="fa fa-pencil-square-o fa-3x fa-fw bigicon"></i>
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

                                        <form class="form-horizontal" method="post" >
                                            

                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-barcode bigicon"></i>
                                                </span>
                                                <div class="col-xs-3"> 
                                                   <input id="fname" name="name" type="text" placeholder="Codigo de barra" class="form-control"> 
                                                </div>
                                               

                                            </div>
                                            
                                              <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-clipboard bigicon"></i>
                                                </span>
                                                 <div class="col-xs-4">
                                                     <input id="lname" name="name" type="text"  placeholder="Nombre del producto" class="form-control">
                                                </div>
                                                </div>
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                 <i class="fa fa-truck bigicon"></i>
                                                </span>

                                                <div class="col-xs-4">
                                                    <select class="form-control">
                                                        <option>--Seleccione un Proveedor--</option>
                                                        <option>Juan perez</option>
                                                        <option>Fernando Rodriguez </option>   
                                                    </select> 
                                                </div>
                                                <div class="col-xs-4"> 
                                                   
                                                </div>
                                            </div>
                                        
                                
                                             
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-shopping-cart bigicon"></i>
                                                </span>

                                                <div class="col-xs-3">
                                                    <input id="email" name="email" type="text" placeholder="cantidad a vender" class="form-control">
                                                 </div>
                                                 <span class="col-md-1 col-md-offset-1 text-center">
                                                    <i class="fa fa-dollar (alias) bigicon"></i>
                                                </span>
                                                 <div class="col-xs-3">
                                                    <input id="email" name="email" type="text" placeholder="Sub-Total" class="form-control">
                                                 </div>

                                            </div>
                                            
                                            

                                            <div class="form-group" align="center">
                                                <button class="btn btn-info" >Agregar al carrito</button>
                                            </div>
                                            <br>
                      

                                            <div class="form-group">
                                               
                                            
                                                <div class="col-md-12" >
                                                     <div class="panel-body"> 
                                              
                            <div class="table-responsive" align="center" >
                             <br>
                                <table class="table  table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead valign="bottom" align="right" >
                                        <tr  class="warning" align="center">
                                            <th align="center" >producto</th>
                                            <th align="center">cantidad</th>
                                            <th align="center" >precio</th>
                                            <th align="center" >Subtotal</th>
                                            <th align="center" colspan="2" >accion</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
  <tr align="center">
  <td colspan="3">Total</td>

  <td colspan="1" >$ 200</td>
  <td colspan="1" align="left"></td>
  


  </tr>
  </tfoot>
                                    <tbody>
                                        
                                        <tr align="center">
                                            <td>producto 2</td>
                                            <td>40</td>
                                            <td>5</td>
                                            <td>$ 200</td>
                                            <td><button class="btn btn-danger active">eliminar</button></td>
                                            
                                        </tr>
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
                                            
                                            

                                            
                                    </form>
                                    <div class="form-group">
                                                <div class="col-md-12 text-center" align="center">
                                                    <button   class="btn btn-lg btn-primary active" data-toggle="modal" data-target="#gridSystemModal">Facturar</button>
                                                </div>                  
                                            </div>

                                </div>
                            </div>
 
                        </div>
                    </section>
  
@stop