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

 


 
                <article class="content forms-page" >
                @if(Session::has('message'))
                  <div class="alert alert-success alert-dismissible" role="alert">

  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Escuela sea Agregado Correctamente.</strong> 
</div>
@endif
<div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong id="msj"></strong> 
    </div>
    <div id="msj-error1" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong id="msj1"></strong> 
    </div>
    <div id="msj-error2" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong id="msj2"></strong> 
    </div>
    <div id="msj-error3" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong id="msj3"></strong> 
    </div>
                   
                    <div class="title-block">
                    <span class="col-md-1  text-center">
                        <i class="fa fa-home bigicon"></i>
                     </span>
                        <h1 class="title">Escuela</h1>
                        <p class="title-description">Registro de Escuela </p> 
                         
                           
                    </div>
                      
                    {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
                    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
                    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
                    {!!Html::style('assets/css/style.css')!!}  
                    {!!Html::style('ssets/css/main-style.css')!!} 
                   


    
                       <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title">Formulario de Escuela</h1>
                             </div>
<h2 align="center">Escuela</h2>
                <section class="section">
                    
                       <div >
                                   <div class="card card-block sameheight-item" >
 {!! Form::open(['route'=>'escuela.store','method'=>'POST','class'=>'form-horizontal']) !!}
                                            <br>           
                                            <br>

                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-home bigicon"></i>
                                                </span>
                                                <div class="col-xs-4"> 
                                                   <input id="nomesc" name="nomesc" type="text" placeholder="Ingrese el nombre del centro escolar" class="form-control" > 
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
                                               
                                                 <input id="telesc" name="telesc" type="text" placeholder="Ingrese el Telefono de la escuela" class="form-control"> 
                                                
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

                                           
                                       {!! Form::close() !!}
                                    </div>




                              </div>
                        
 
                     
                    </section>

                    </div>

@endsection
 