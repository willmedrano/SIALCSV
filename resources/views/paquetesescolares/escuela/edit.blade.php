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
                                   <div class="form-horizontal card card-block sameheight-item" >

                                       
                                        
                                      {!! Form::model($escuelas, ['route'=> ['escuela.update', $escuelas->idescuela],'method'=>'PUT']) !!}
                                            <br>           
                                            <br>

                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-home bigicon"></i>
                                                </span>
                                                <div class="col-xs-4"> 
                                                   <input id="nomesc" name="nomesc" type="text"  class="form-control" value="{{ $escuelaM->nomesc }}"> 
                                                </div>
                                               

                                            </div>
                                            <br>
                                      <div class="form-group">
                                              <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-user bigicon"></i>
                                                </span>
                                                <div class="col-xs-4"> 
                                                   <input id="nomdirec" name="nomdirec" type="text"  class="form-control" value="{{ $escuelaM->nomdirec }}"> 
                                                </div>  
                                        </div>
                                           <br>
                                         <div class="form-group">
                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-phone-square bigicon"></i>
                                                </span>
                                                <div class="col-xs-4"> 
                                                   <input id="telesc" name="telesc" type="text"  class="form-control" value="{{ $escuelaM->telesc }}"> 
                                                </div> 
                                        </div>
                                        <br>
                                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="diresc" name="diresc"  rows="2" >{{ $escuelaM->diresc }}</textarea>
                            </div>
                        </div>
                                       
                                           <br>
                                         
                              
                                        <div class="form-group">
                            <div class="col-md-12 text-center" align="center">
                               {!! Form::submit('Guardar',['class'=>'btn btn-primary btn-lg']) !!}
                            </div>

                            
                        </div>
                                           
                                       {!! Form::close() !!}
                                    </div>




                              </div>
                        
 
                     
                    </section>

                    </div>









   
    
@stop
