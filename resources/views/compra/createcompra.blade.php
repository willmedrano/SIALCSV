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
                    {!!Html::style('ssets/css/main-style.css')!!} 

                       <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title">Formulario de Compras</h1>
                             </div>
<h2 align="center">Compras</h2>
                            <section class="section">
                    
                                <div >
                                    <div class="card card-block sameheight-item" >

                                        <form class="form-horizontal" method="post" >
                                            <br>           
                                            <br>

                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-barcode bigicon"></i>
                                                </span>
                                                <div class="col-xs-3"> 
                                                   <input id="fname" name="name" type="text" placeholder="Codigo de barra" class="form-control"> 
                                                </div>
                                               

                                            </div>
                                            <br>

                                              
                                            <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-book bigicon"></i></span>
                            <div class="col-md-3">
                                <input id="nomP" name="nomP" type="text" placeholder="Nombre del Producto" class="form-control">
                                
                            </div>

                            <span class="col-md-1  text-center"><i class="fa fa-credit-card bigicon"></i></span>
                            <div class="col-md-3">
                               <select class="form-control">
                                                        <option>Seleccione un proveedor</option>
                                                        <option>Juan perez</option>
                                                        <option>Fernando Rodriguez </option>   
                                                    </select> 
                            </div>
                        </div>
                                            <br>
                                              
                                                   
                                        <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-calendar bigicon"></i>
                                                </span>

                                                <div class="col-xs-3">
                                                    <input id="email" name="email" type="date" placeholder="Fecha de Nacimiento " class="form-control">
                                                 </div>

                                            </div>
                                            <br> 
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-shopping-cart bigicon"></i>
                                                </span>

                                                <div class="col-xs-3">
                                                    <input id="email" name="email" type="text" placeholder="cantidad a comprar" class="form-control">
                                                 </div>
                                                 <span class="col-md-1  text-center"><i class="fa fa-dollar bigicon"></i></span>
                                                 <div class="col-xs-3">
                                                    <input id="email" name="email" type="text" placeholder="Precio de compra unitario" class="form-control">
                                                 </div>

                                            </div>
                                            <br>  

                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-dollar (alias) bigicon"></i>
                                                </span>

                                                <div class="col-xs-3">
                                                    <input id="phone" name="phone" type="text" placeholder="subtotal" class="form-control">
                                                </div>

                                            </div>
                                            <br>

                                            <div class="form-group" align="center">
                                                <button class="btn btn-info">Agregar al carrito</button>
                                            </div>
                                            
                      

                                            <div class="form-group">
                                               
                                            
                                                <div class="col-md-12" >
                                                     <div class="panel-body"> 
                                              
                            <div class="table-responsive" align="center" >
                             <br>
                                <table class="table  table-bordered table-hover" id="dataTables-example">
                                    <thead valign="bottom" align="right" >
                                        <tr  class="warning">
                                            <th align="center" >producto</th>
                                            <th align="center">cantidad</th>
                                            <th align="center" >precio</th>
                                            <th align="center" >Subtotal</th>
                                            <th align="center" >accion</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr align="center">
                                            <td>producto 2</td>
                                            <td>40</td>
                                            <td>5</td>
                                            <td>200</td>
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
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-money bigicon"></i>
                                                </span>
                                                <div class="col-xs-3">
                                                    
                                                 
                                                    <select class="form-control">
                                                        <option>Seleccione tipo de pago</option>
                                                        <option>Contado</option>
                                                        <option>Credito </option>   
                                                    </select>
                                            
                                                </div>
                                               </div> 
                                            <br>
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-usd bigicon"></i>
                                                </span>
                                                <div class="col-xs-3">
                                                    
                                                  <input id="phone" name="phone" type="text" placeholder="Total apagar" class="form-control">
                                            
                                                 
                                                </div>
                                                   <span class="col-md-1  text-center"><i class="bigicon"style=" font-weight: bold;">#</i></span>
                                                  <div class="col-xs-3">
                                                 
                                             <input id="phone" name="phone" type="sp" placeholder="Numero de cuotas" class="form-control">
                                                
                                                </div>
                                                </div>

                                            <br>


                                            <div class="form-group">
                                                <div class="col-md-12 text-center" align="center">
                                                    <button type="submit"  class="btn btn-lg btn-primary ">Guardar</button>
                                                </div>                  
                                            </div>
                  
                                    </form>
                                </div>
                            </div>
 
                        </div>
                    </section>
  
@stop