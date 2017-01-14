
 @extends('probandos') <!-- Importa la plantilla que vamos a utilizar  -->
  
  @section('content')
  
  <style type="text/css"> 
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
    
    <!-- aqui le incorporamos el comportamiento de jquery para poder utilizar las plantillas -->
    {!!Html::script('js/jquery-1.9.0.min.js')!!}
    {!!Html::script('js/jquery.maskedinput.js')!!}
<script type="text/javascript">
  jQuery(function($) {
      $.mask.definitions['~']='[+-]';
      $('#date').mask('99/99/9999',{placeholder:"mm/dd/yyyy"});
      $('#telesc').mask('9999-9999');
      $('#phoneext').mask("(999) 999-9999? x99999");
      $("#tin").mask("99-9999999");
      $("#ssn").mask("999-99-9999");
      $("#product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
      $("#eyescript").mask("~9.99 ~9.99 999");
      $('textarea,form').attr('autocomplete','off');
      $('input,form').attr('autocomplete','off');
   });
  </script>
    <article class="content forms-page"><!-- Aqui inicial el article -->
          
          <?php $message=Session::get('message')?><!-- Espara mostar un mensaje de insersion de escuelas-->

  @if($message=='store')<!-- comprueba si es nueva escuela -->
      <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Exito!!</strong> Registrado Correctmente
    </div>
  @endif
         @include('errors.validaciones')   

      <div class="title-block"><!-- Aqui inicia el div de title-block -->
        <span class="col-md-1  text-center">
          <i class="fa fa-home bigicon"></i>
        </span>
        <h1 class="title">Escuela</h1>
        <p class="title-description">Registro de Escuela</p>   
      </div>

      <!-- para cambiar el estilos del formulario-->                
      {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}
      {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
      {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
      {!!Html::style('assets/css/style.css')!!}  
      {!!Html::style('assets/css/main-style.css')!!} 
                   
      <div class="panel panel-primary"><!-- Aqui inicia el div de panel panel-primary para darle color al formulario -->
        <div class="panel-heading">
          <h1 class="panel-title">Formulario de Escuela</h1>
        </div>

        <h2 align="center">Escuela</h2>

          <section class="section"><!-- Aqui inicia el seccion de seccion  -->
                    
            <div><!-- Aqui inicia el div que no tiene clases-->

              <div class="card card-block sameheight-item"><!-- Aqui inicia el div de clase card card-block sameheight-itempara darle color al formulario -->

                {!! Form::open(['route'=>'escuela.store','method'=>'POST','class'=>'form-horizontal']) !!}<!-- Aqui inicia el formulario -->
                  
                  <br>           
                  <br>

                  <div class="form-group">

                    <span class="col-md-1 col-md-offset-2 text-center">
                      <i class="fa fa-home bigicon"></i>
                    </span>
                    <div class="col-xs-4"> 
                      <input id="nomesc" name="nomesc" type="text" placeholder="Ingrese el nombre del centro escolar" class="form-control"> 
                    </div>
                  </div>
                  
                  <br>
                  <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center">
                      <i class="fa fa-user bigicon"></i>
                    </span>
                    <div class="col-xs-4"> 
                      <input id="nomdirec" name="nomdirec" type="text" placeholder="Ingrese el nombre del director" class="form-control" > 
                    </div>  
                  </div>
                  <br>

                  <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center">
                      <i class="fa fa-phone-square bigicon"></i>
                    </span>
                    <div class="col-xs-4">                           
                      <input id="telesc" name="telesc" type="tel" name="telefono" placeholder="Ingrese el Telefono de la escuela" class="form-control" >                          
                      </div> 
                  </div>

                  <br>
                  <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                    <div class="col-md-8">
                      <textarea class="form-control" id="diresc" name="diresc" placeholder="Direccion de la escuela" rows="2" ></textarea>
                    </div>
                  </div>
                                       
                  <br>            
                  <div class="form-group">
                    <div class="col-md-12 text-center" align="center">
                      <button type="submit"  class="btn btn-primary btn-lg">Guardar</button>
                    </div>     
                  </div>

                {!! Form::close() !!}<!-- Aqui finaliza el sierre del foemulario -->
              </div><!-- Aqui ffinaliza el div de clase card card-block sameheight-itempara darle color al formulario -->

            </div><!-- Aqui finaliza  el div que no tiene clases-->
          </section><!-- Aqui finaiza el seccion de clase seccion  -->
    </div><!-- Aqui finaliza el div de panel panel-primary para darle color al formulario -->

@endsection

  
 