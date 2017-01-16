@extends('probandos')

<?php $message=Session::get('message')?>

@if($message=='store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Exito!!</strong> Empleado Guardado
</div>
@endif



@section('content')

<style type="text/css" >
    


.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
.legend{
    color: #36A0FF;
}

  .thumb{
     height: 300px;
     border: 1px solid #000;
     margin: 10px 5px 0 0;
}  
</style>
   {!!Html::script('js/jquery-1.9.0.min.js')!!}
  {!!Html::script('js/jquery.maskedinput.js')!!}
 <script type="text/javascript">
jQuery(function($) {
      $.mask.definitions['~']='[+-]';
      $('#date').mask('99/99/9999',{placeholder:"mm/dd/yyyy"});
      $('#tel').mask('9999-9999');
      $('#nit').mask("9999-999999-999-9");
      $("#tin").mask("99-9999999");
      $("#dui").mask("99999999-9");
      $("#ssn").mask("999-99-9999");
      $("#product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
      $("#eyescript").mask("~9.99 ~9.99 999");
      $('textarea,form').attr('autocomplete','off');
      $('input,form').attr('autocomplete','off');
   });
</script> 
               

                <article class="content forms-page" >
                  
                   
                    <div class="title-block">
                        <h1 class="title">Empledados</h1>
                        <p class="title-description"> Reportes de Empleados </p> 
                         
                           
                    </div>
                      
                    {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
                    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
                    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
                    {!!Html::style('assets/css/style.css')!!}  
                    {!!Html::style('assets/css/main-style.css')!!} 
                    {!!Html::script('js/jquery-1.9.0.min.js')!!}
                       <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title">Reportes</h1>
                             </div>

                            <section class="section">
                    
                                <div>
                                    <div class="card card-block sameheight-item" >
                                    
                                     

                                        <div class="form-horizontal">
                                      
                    
<div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                   
                    <thead><tr>
                      <th>ID</th>
                      <th>reporte</th>
                      <th>   Reporte por  fecha    </th>
                      <th>ver</th> 
                      <th>descargar</th>
                    </tr></thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Reporte de Usuarios</td>
                      <td> 
 {!!Form::model(['method'=>'PATCH','route'=>'reporte.store'])!!} 
                        <div class="form-group">

                                                <span class="col-md+1 col-md-offset+2 text-center">
                                                    <i class="fa fa-calendar bigicon"></i>
                                                </span>
 
                                                <div class="col-xs-4">
                                                    <input id="nac" name="nac" type="date" placeholder="Fecha " class="form-control"  required data-toggle="tooltip" title="Fecha">

                                                    <input id="fcontrato" required name="fcontrato" type="hidden" value="<?php echo dameFecha(date("Y-m-d"),0);?>">
                                                 </div>

                                            </div>
            
                      </td>
                      <td>
                    
                        <input id="na1" name="na1" type="hidden" placeholder="Fecha " class="form-control" value=1>
                      <button  target="_blank" class="btn btn-block btn-primary btn-xs">Ver</button></a>
                      <td>
                      <input id="na2" name="na2" type="hidden" placeholder="Fecha " class="form-control" value=2>
                      <button  target="_blank" class="btn btn-block btn-primary btn-xs">Descargar</button></a>
                     </td>
                      
                      {!! Form::close() !!}</td>
                     
                     
                    
                    </tr>
                   
                  </tbody></table>
                </div>
                                </div>
                            </div>
 
                        </div>
                    </section>
  
@stop
<?php 
$time=time();
    
    function dameFecha($fecha,$dia){
        list($year,$mon,$day)=explode('-',$fecha);
        return date('Y-m-d',mktime(0,0,0,$mon,$day+$dia,$year));    
    }
   $total=0; 


  
?>
@section('scripts')


{!! Html::script('js/script3.js') !!}

 @endsection

