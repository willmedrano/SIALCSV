@extends('probandos')

@section('content')

         
    <
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
                                <div class="card card-block sameheight-item" >
                                    <div class="title-block" align="center">
                                        <h3 class="title">
                        Formulario de producto
                    </h3> </div>


                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center" align="center">Producto</legend>

                        <div class="form-group">

                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-barcode bigicon icon_nav" ></i></span>
                            <div class="col-md-3">

                                <input id="cod" name="cod" type="text" placeholder="Codigo del Producto" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-book bigicon"></i></span>
                            <div class="col-md-4">
                                <input id="nomP" name="nomP" type="text" placeholder="Nombre del Producto" class="form-control">
                            </div>
                        </div>
<br>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="marca" name="marca" type="text" placeholder="Marca " class="form-control">
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-xs-3">
                                <input id="tipo" name="tipo" type="text" placeholder="tipo" class="form-control">
                            </div>
                        </div>
                        <br>
                        
                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-xs-3">
                                <input id="tipo" name="tipo" type="text" placeholder="tipo" class="form-control">
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
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
</section> 
@stop