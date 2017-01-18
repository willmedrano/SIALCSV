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
    





                <article class="content forms-page">
                            <?php $message=Session::get('message');?>

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
                    {!!Html::style('assets/css/main-style.css')!!} 


                
<div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title">Formulario de producto</h1>

                             </div>
                             <div align="center">
                             <h2 align="center"> Producto </h2> 
                             <br>
</div>
                 {!! Form::open(['route'=>'inve.store','method'=>'POST','class'=>'form-horizontal']) !!}
                
                    <fieldset>
                        

                        <div class="form-group">
            
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-barcode bigicon icon_nav" ></i></span >
                                                      <div class="col-md-3">

                                <input id="cod" name="cod" type="text" placeholder="Codigo del Barra" required autocomplete="off" class="form-control" >
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-book bigicon"></i></span>
                            <div class="col-md-3">
                                <input id="nomProd" name="nomProd" type="text" placeholder="Nombre del Producto" required class="form-control">
                                
                            </div>

                            <span class="col-md-1  text-center"><i class="fa fa-dropbox bigicon"></i></span>
                            <div class="col-md-3">
                                <input id="uniCaja" name="uniCaja" type="number" min="1" placeholder="Unidades de una Caja" class="form-control" required pattern="[0-9]{1,3}" max="1000">
                                
                            </div>
                        </div>

                        
<br>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-tags bigicon"></i></span>
                            <div class="col-md-3">
                                <input id="marca" required name="marca" type="text" required placeholder="Marca" class="form-control" >
                            </div>

                            <span class="col-md-1  text-center"><i class="fa bigicon" style=" font-weight: bold;">M</i></span>
                            <div class="col-xs-3">
                                <input id="minimo" name="minimo" type="number" placeholder="unidades minimas requeridas" class="form-control" pattern="[0-9]{1,3}" required min="0" max="99999"> 
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa  bigicon" style=" font-weight: bold;">%</i></span>
                            <div class="col-xs-3">
                                <input id="gUni"
                                 name="gUni" type="number" placeholder="porcentaje de ganancia por unidad" pattern="[0-9]{1,3}"  class="form-control" required="" min="0" max="999">
                            </div>

                            <span class="col-md-1  text-center"><i class="fa bigicon" style=" font-weight: bold;">%</i></span>
                            <div class="col-xs-3">
                                <input id="gCaja" name="gCaja" type="text" placeholder="porcentaje de ganancia por Caja" class="form-control" pattern="[0-9]{1,3}"  required >
                            </div>

                        </div>
                        <br>
                        
                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-truck bigicon"></i></span>
                            <div class="col-xs-3">
                                <select class=" form-control" name="idProve">
                            
                             @foreach($prov as $prov)

                                <option  value="{{ $prov->id }}" >{{ $prov->nom }}</option>
                            @endforeach
                           
                        </select>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-7">
                                <textarea rows="2" class="form-control" id="desc" name="desc" placeholder="Agregue la descripcion del producto" rows="7" required=></textarea>
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