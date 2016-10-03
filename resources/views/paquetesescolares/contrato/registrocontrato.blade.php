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
                        <h1 class="title">Contrato</h1>
                        <p class="title-description">Registro de Contrato</p> 
                         
                           
                    </div>
                      
                    {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
                    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
                    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
                    {!!Html::style('assets/css/style.css')!!}  
                    {!!Html::style('ssets/css/main-style.css')!!} 

                       <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title">Formulario de Contrato</h1>
                             </div>
                             <br> 
<h2 align="center">Contrato</h2>
                <section class="section">
                    
                       <div >
                                    <div class="card card-block sameheight-item" >

                                        <form class="form-horizontal" method="post" >
                                       <br>           
                                            <br>

                                           
                                            <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>
                            <div class="col-md-3">
                                <select name="idtipopgo" class="form-control">
                                                        <option selected="">seleccione la Escolar</option>
                                                        <option>escuela 1 </option>
                                                        <option>escuela 2 </option>
                                                     </select> 
                                
                            </div>

                            <span class="col-md-1  text-center"><i class="fa fa-book bigicon"></i></span>
                            <div class="col-md-3">
                               <select class="form-control">
                                                        <option>Seleccione un productos</option>
                                                        <option>cajas 1</option>
                                                        <option>caja 2</option>   
                                                    </select> 
                            </div>
                        </div>
                                            <br>
                                            <div class="form-group"> 

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-calendar bigicon"></i>
                                                </span>
                                                <div class="col-xs-3"> 
                                                      <input id="email" name="email" type="date" placeholder="digite la fecha de entrega " class="form-control"><span class="has-success">Fecha de entrega.</span> 
                                                </div>

                                               
                                               <span class="col-md-1  text-center">
                                                    <i class="fa fa-dollar (alias) bigicon"></i>
                                                </span>
                                                <div class="col-xs-3"> 
                                                      <input id="email" name="email" type="text" placeholder="0.00 " class="form-control"> 
                                                      
                                                </div>





                                            </div>
                                            <br>
                                         

                                               
                                               <div class="form-group">

                                                
                                                   <span class="col-md-1 col-md-offset-2 text-center"><i class="bigicon" style=" font-weight: bold;">#</i></span>
                                                  <div class="col-xs-3">
                                            
                                             <input id="phone" name="phone" type="sp" placeholder="cantidad de paquetes" class="form-control">
                                                
                                                </div>
                                                <span class="col-md-1  text-center">
                                                    <i class="fa fa-money bigicon"></i>
                                                </span>

                                                <div class="col-xs-3">
                                                    <input id="phone" name="phone" type="text" placeholder="total" class="form-control">
                                                </div>
                                                </div>

                                           
                                           
                                            <div class="form-group">

                                                

                                            </div>
                                            <br>

                                       <div class="form-group">
                                            <div class="col-md-12 text-center" align="center">
                                                    <button type="submit" class="btn btn-lg btn-primary ">Guardar</button>
                                                </div>
                                                </div>
                                        </form>
                                  




                                </div>
                            </div>
                            </section>
                        </div>
                        
@stop
