@extends('probandos')

@section('content')

   
               

              
<?php $message=Session::get('message')?>

@if($message=='store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Exito!!</strong> Proveedor Creado
</div>
@endif
@section('content')
  <article class="content forms-page" >
                  
 <style type="text/css" >
    


.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
.legend{
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
.title
{
    color: #36A0FF;
}
.gris{
    background:#8c8c8c; 
    color:white;
}h2,h1
{
    color: #36A0FF;
}
</style>                   

                    <div class="title-block">
                    <span class="col-md-1  text-center">
         <i class="fa fa-truck bigicon"></i>
          </span>
                        <h1 class="title">Control de Proveedores</h1>
                        <p class="title-description">Registro de Proveedores</p> 
                         
                           
                    </div>
                     
                    {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
                    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
                    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
                    {!!Html::style('assets/css/style.css')!!}  
                    {!!Html::style('ssets/css/main-style.css')!!} 

                       <div class="panel panel-primary">
                            <div class="panel-heading">

                                <h1 class="panel-title">Formulario de Proveedores</h1>
                             </div>
<h2 align="center">Proveedores</h2>
                         
                            <section class="section">
                    
                                <div >
                                    <div class="card card-block sameheight-item" >

    {!! Form::open(['route'=>'prove.store','method'=>'POST']) !!}
        
        <br>
        <br>
       
        <div class="form-group">

        <span class="col-md-1 col-md-offset-2 text-center">
         <i class="fa fa-user bigicon"></i>
          </span>
                <div class="col-xs-4"> 
                {!! Form::text('nom',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Proveedor','autofocus' ]) !!}
                  
                </div>
                                                   

         </div>
        <br>
        <br>
        <br>
      <div class="form-group">

        <span class="col-md-1 col-md-offset-2 text-center">
         <i class="fa fa-phone-square bigicon"></i>
          </span>
                <div class="col-xs-4"> 
               {!!Form::tel('tel',null,['class'=>'form-control','placeholder'=>'Ingrese el Telefono del Proveedor']) !!}
                  
                </div>
                                                   

         </div>
<br>
<br>
<br>
        <div class="form-group">

        <span class="col-md-1 col-md-offset-2 text-center">
         <i class="fa fa-credit-card  bigicon"></i>
          </span>
                <div class="col-xs-4"> 
               <input type="text" name="nit" value="" placeholder="Ingrese el NIT" class="form-control" >
                  
                </div>
                                                   

         </div>

<br>
<br>
<br>
                    <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="dir" name="dir" placeholder="Ingrese la Dirrecion del Proveedor" rows="2"></textarea>
                            </div>
                        </div>

        <br>
<br>
<br>
        <br>

 <div class="form-group">
                            <div class="col-md-12 text-center" align="center">
                             {!! Form::submit('Guardar',['class'=>'btn btn-primary btn-lg']) !!}
                           
                            </div>

                            
                        </div>
       
<br>
<br>


    {!! Form::close() !!}

    </div>
    </div>

</section>
</div>
</article>



        @stop