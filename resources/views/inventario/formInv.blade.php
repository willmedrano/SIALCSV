@extends('probandos')

@section('content')

         
    {!!Html::style('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css')!!}
<style type="text/css" >
    


.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
legend{
    color: #36A0FF;
}
h2
{
    color: #36A0FF;
}

    
</style>







                <article class="content forms-page">
                    <div class="title-block">
                    <span class=""><i class="fa fa-archive bigicon icon_nav" > Inventario</i></span>
                        <h2 >
        
    </h2>
                        <p class="title-description"> Registro de Producto </p>
                    </div>
            <!--<div class="subtitle-block">
                        <h3 class="subtitle">
        Formulario de Producto
    </h3> </div>-->
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
                <form class="form-horizontal" method="post">
                    <fieldset>
                        

                        <div class="form-group">
            
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-barcode bigicon icon_nav" ></i></span >
                                                      <div class="col-md-3">

                                <input id="cod" name="cod" type="text" placeholder="Codigo del Producto" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-book bigicon"></i></span>
                            <div class="col-md-3">
                                <input id="nomP" name="nomP" type="text" placeholder="Nombre del Producto" class="form-control">
                                
                            </div>

                            <span class="col-md-1  text-center"><i class="fa fa-dropbox bigicon"></i></span>
                            <div class="col-md-3">
                                <input id="nomP" name="nomP" type="text" placeholder="Unidades de una Caja" class="form-control">
                                
                            </div>
                        </div>

                        
<br>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-tags bigicon"></i></span>
                            <div class="col-md-3">
                                <input id="marca" name="marca" type="text" placeholder="Marca " class="form-control">
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-percent bigicon"></i></span>
                            <div class="col-xs-3">
                                <input id="tipo" name="tipo" type="text" placeholder="porcentaje de ganancia por unidad" class="form-control">
                            </div>

                            <span class="col-md-1  text-center"><i class="fa fa-percent bigicon"></i></span>
                            <div class="col-xs-3">
                                <input id="tipo" name="tipo" type="text" placeholder="porcentaje de ganancia por Caja" class="form-control">
                            </div>

                        </div>
                        <br>
                        
                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-truck bigicon"></i></span>
                            <div class="col-xs-3">
                                <select class=" form-control">
                            <option>--Selecione un Proveedor--</option>
                            <option>Vendedor</option>
                            <option>Otros</option>
                           
                        </select>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-7">
                                <textarea rows="2" class="form-control" id="message" name="message" placeholder="Agregue la descripcion del producto" rows="7"></textarea>
                            </div>
                        </div>
                            <br>
                        <div class="form-group">
                            <div class="col-md-12 text-center" align="center">
                                <button type="submit"  class="btn btn-primary btn-lg">Guardar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        </div>
    </div>
</section> 
</article>
@stop