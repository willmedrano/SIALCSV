@extends('probandos')
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

{!!Html::script('js/jquery-1.9.0.min.js')!!}
  {!!Html::script('js/jquery.maskedinput.js')!!}
 <script type="text/javascript">
jQuery(function($) {
      $('input,form').attr('autocomplete','off');
      $('textarea,form').attr('autocomplete','off');
   });
</script>


        <article class="content forms-page"><!-- Aqui inicia el article de la case content forms-page-->
            <?php $message=Session::get('message')?>

                @if($message=='store')

                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Exito!!</strong> Registrado Correctmente
                    </div>
                @endif
                @if(count($errors)>0)
          <div class="alert alert-danger active alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <ul>
         @foreach($errors->all() as  $value)  
          <li> 
              {!! $value !!}
        </li>
         @endforeach
      </ul>
    </div>
  @endif  

            <div class="title-block">

                <span class="">
                    <i class="fa fa-archive bigicon icon_nav"> Inventario</i>
                </span>
                <p class="title-description"> Registro de Producto de Paquetes </p>

            </div>
           
            <section class="section">
                        
                <div class="row sameheight-container">
                    
                    <div>
                
                        <div class=\ >
                                    

                            {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
                            {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
                            {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
                            {!!Html::style('assets/css/style.css')!!}  
                            {!!Html::style('assets/css/main-style.css')!!} 


                
                            <div class="panel panel-primary">

                                <div class="panel-heading">
                                    <h1 class="panel-title">Formulario de Producto de Paquetes</h1>
                                </div>
                                
                                <div align="center">
                                    <h2 align="center"> Productos de Paquetes</h2> 
                                    <br>
                                </div>

                                {!! Form::open(['route'=>'paquete.store','method'=>'POST','class'=>'form-horizontal']) !!}<!-- Aqui inicia el formulario -->
                
                                    <fieldset>
                        

                                        <div class="form-group">
            
                                            <span class="col-md-1 col-md-offset-2 text-center">
                                                <i class="fa fa-barcode bigicon icon_nav" ></i>
                                            </span>
                                            
                                             <div class="col-md-3">

                                                <input id="cod" name="cod" type="text" placeholder="Codigo del Barra" required autocomplete="off" class="form-control">
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group"><!--Abrimos el div de la clase form-group  -->

                                            <span class="col-md-1 col-md-offset-2 text-center">
                                                <i class="fa fa-book bigicon"></i>
                                            </span>

                                            <div class="col-md-3"><!--Abrimos el div de la clase col-md-3  -->

                                                <input id="nomProd" name="nomProd" type="text" placeholder="Ingrese Nombre del Paquete" class="form-control">

                                            </div><!--Cerramos el div de la clase col-md-3  -->
                                            
                                            <div class="col-md-3"><!--Abrimos el div de la clase col-md-3  -->

                                                <input id="uniCaja" name="uniCaja" type="hidden" requiered placeholder="Unidades de una Caja" class="form-control" value="1">

                                            </div><!--Cerramos el div de la clase col-md-3  -->
                                        </div><!-- Cierra el div de la clase form-group  -->

                                         <br>
                                        
                                        <div class="form-group">

                                            <span class="col-md-1 col-md-offset-2 text-center">
                                                <i class="fa fa-dollar (alias) bigicon"></i>
                                            </span>

                                            <div class="col-md-3">
                                                
                                                <input id="cPromedio" name="cPromedio" type="text" requiered placeholder="Ingrese el Precio del Paquete" class="form-control" value="">
                                            
                                             </div>
                                        </div>
                        
                                        <div class="form-group">
                           
                                            <div class="col-xs-3">
                                                
                                                <input id="gUni" name="gUni" type="hidden" placeholder="porcentaje de ganancia por unidad" class="form-control" value="0">
                                            </div>

                                            <div class="col-xs-3">
                                            
                                             <input id="gCaja" name="gCaja" type="hidden" placeholder="porcentaje de ganancia por Caja" class="form-control" value="0">
                                            
                                            </div>
                                        </div>
                                        <br>
                        
                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center">
                                                <i class="fa fa-truck bigicon"></i>
                                            </span>
                                            
                                            <div class="col-xs-3">
                                                <select class=" form-control" name="idProve">
                            
                                                    @foreach($proveedor as $prov)

                                                        <option  value="{{ $prov->id }}">{{ $prov->nom }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group">
                            
                                            <span class="col-md-1 col-md-offset-2 text-center">
                                                <i class="fa fa-pencil-square-o bigicon"></i>
                                            </span>
                                            <div class="col-md-7">
                                                
                                                 <textarea rows="2" class="form-control" id="desc" name="desc" placeholder="Agregue la Descripcion del Paquete" rows="7"></textarea>

                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <div class="col-md-12 text-center" align="center">
                                                
                                                <button type="submit"  class="btn btn-primary btn-lg">Guardar</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                {!! Form::close() !!} <!-- Aqui Cerramos el formulario -->
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
        </article><!-- Aqui Cerramos el article de la case content forms-page -->
@stop