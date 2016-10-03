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
                        <i class="fa fa-building-o bigicon"></i>
                     </span>
                        <h1 class="title">Cuentas</h1>
                        <p class="title-description">Registo de Cuentas </p> 
                         
                           
                    </div>
                      
                    {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
                    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
                    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
                    {!!Html::style('assets/css/style.css')!!}  
                    {!!Html::style('ssets/css/main-style.css')!!} 

                       <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title">Formulario de Cuentas</h1>
                             </div>
<h2 align="center">Cuentas</h2>
                <section class="section">
                    
                       <div >
                                    <div class="card card-block sameheight-item" >

                                        <form class="form-horizontal" method="post" >
                                            <br>           
                                            <br>

                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-folder bigicon"></i>
                                                </span>
                                                <div class="col-xs-4"> 
                                                   <input id="fname" name="name" type="text" placeholder="codigo de la cuenta" class="form-control"> 
                                                </div>
                                               

                                            </div>
                                            <br>
                                      <div class="form-group">
                                              <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-pencil-square-o bigicon"></i>
                                                </span>
                                                <div class="col-xs-4"> 
                                                   <input id="fname" name="name" type="text" placeholder="Ingrese el nombre de la cuenta" class="form-control"> 
                                                </div>  
                                        </div>
                                           <br>
                                         <div class="form-group">
                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-dollar (alias) bigicon"></i>
                                                </span>
                                                <div class="col-xs-4"> 
                                                   <select name="idtipopgo" class="form-control">
                                                        <option selected="">Deudor</option>
                                                        <option>Acreedor </option>
                                                        
                                                     </select> 
                                                     <span class="has-success">Saldo de la cuenta</span>
                                                </div> 
                                        </div>
                                        <br>
                                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-money bigicon"></i></span>
                            <div class="col-md-4">
                               <select name="idtipopgo" class="form-control">
                                                        <option selected="">Activo</option>
                                                        <option>Pasivo</option>
                                                        
                                                     </select> 
                                                     <span class="has-success">clasifacion de la cuenta.</span>
                            </div>
                        </div>
                                       
                                           <br>
                                         
                              
                                        <div class="form-group">
                            <div class="col-md-12 text-center" align="center">
                                <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                            </div>

                            
                        </div>
                                           
                                        </form>
                                    </div>




                              </div>
                        
 
                     
                    </section>

                    </div>









   
    
@stop
