@extends('probandos')
<?php $message=Session::get('message')?>

@if($message=='store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Exito!!</strong> Tipo de Paquete Guardado
</div>
@endif

@section('content')

         
    
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
                    <span class=""><i class="fa fa-archive bigicon icon_nav" >  </i></span>
                        <h2 >
        
    </h2>
                        <p class="title-description"> Registro de Tipo de Paquete</p>
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
                                <h1 class="panel-title">Formulario de Tipo de Paquete</h1>

                             </div>
                             <div align="center">
                             <h2 align="center"> Tipo de Paquete </h2> 
                             <br>
</div>
                 {!! Form::open(['route'=>'paqueteregistro.store','method'=>'POST','class'=>'form-horizontal']) !!}
                
                    <fieldset>
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-book bigicon"></i></span>
                            <div class="col-md-3">
                                <input id="nompaquete" name="nompaquete" type="text" placeholder="Tipo de Paquete" class="form-control">
                                
                            </div>

                            <span class="col-md-1  text-center"><i class="fa fa-dollar (alias) bigicon"></i></span>
                            <div class="col-md-3">
                                <input id="preciop" name="preciop" type="text" requiered placeholder="Precio del paquete" class="form-control">
                                
                            </div>
                             </div> 
                    
                        <br>
                        <div class="form-group">
                            <div class="col-md-12 text-center" align="center">
                                <button type="submit"  class="btn btn-primary btn-lg">Guardar</button>
                            </div>
                        </div>
                    </fieldset>
                {!! Form::close() !!}
            </div>
        </div>
        </div>
    </div>
</section> 
</article>
@stop