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
thead{
     background: #ffffcc;
     border:1;

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
                        <h1 class="title">Partidas</h1>
                        <p class="title-description">Registo de Partidas</p> 
                         
                           
                    </div>
                      
                    {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
                    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
                    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
                    {!!Html::style('assets/css/style.css')!!}  
                    {!!Html::style('ssets/css/main-style.css')!!} 

                       <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title">Formulario de Partidas</h1>
                             </div>
<h2 align="center">Partidas</h2>
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
                                                        <option selected="">seleccione la cuenta</option>
                                                        <option>caja </option>
                                                        <option>bancos</option>
                                                     </select> 
                                
                            </div>

                            <span class="col-md-1  text-center"><i class="fa fa-money bigicon"></i></span>
                            <div class="col-md-3">
                                <input id="email" name="email" type="txt" placeholder="Digite la cantidad " class="form-control">
                            </div>
                        </div>
                                            <br>
                                           <br>
                                         <div class="form-group">
                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-dollar (alias) bigicon"></i>
                                                </span>
                                                <div class="col-xs-3"> 
                                                   <select name="idtipopgo" class="form-control">
                                                        <option selected="">Debe</option>
                                                        <option>Haber </option>
                                                        
                                                     </select> 
                                                     <span class="has-success">Lo que desea cargar</span>
                                                </div>
                                                 <span class="col-md-1  text-center">
                                                    <i class="fa fa-calendar bigicon"></i>
                                                </span>
                                                <div class="col-xs-3"> 
                                                      <input id="email" name="email" type="date" placeholder="digite la fecha de entrega " class="form-control"><span class="has-success">Si desea cambiar la fceha.</span> 
                                                </div> 
                                        </div>
                                        <br>
                                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-7">
                                <textarea class="form-control" id="message" name="message" placeholder="Direccion" rows="2"></textarea>
                            </div>
                        </div>
                                       
                                           <br>
                                         
                              
                                        <div class="form-group">
                            <div class="col-md-12 text-center" align="center">
                                <button type="submit" class="btn btn-primary btn-lg">Agregar transaccion</button>
                            </div>

                            
                        </div>
                        <table class="table table-bordered" style="width:100%" >
                                                <thead align="center">
                                                    <tr>
                                                       
                                                        <th width="100">Fecha</th>
                                                        <th width="200">Codigo</th>
                                                        <th >Detalle</th>
                                                        <th width="170">Debe</th>
                                                        <th width="170">Haber</th>
                                                       
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                         <th colspan="5" style="
    text-align: center;">partida # 1</th>
                                                        
                                                    </tr>

                                                   
                                                     <tr>
                                                         <th scope="row" >19/08/2016</th>
                                                        <td>41523</td>
                                                        <td>Gastos de mantenimiento</td>
                                                        <td>5.00</td>
                                                        <td></td>
                                                    </tr>
                                                     <tr>
                                                        <th scope="row" >19/08/2016</th>
                                                        <td>111</td>
                                                        <td>Caja</td>
                                                        <td></td>
                                                        <td>5.00</td>
                                                      </tr>
                                                      <tr>
                                                        <th ></th>
                                                        
                                                        <td colspan="2">para comprar una escoba y un palo de trapeado...</td>
                                                        <td></td>
                                                        <td></td>
                                                      
                                                    </tr>
 
                                                      
                                                </tbody>
                                            </table>
                                             <div class="form-group" align="right">

                                                  <span class="col-md-1 col-md-offset-7 "><i class="fa fa-dollar (alias) bigicon"></i></span>
                                               <div class="col-xs-2">

                                                <input id="fname" name="name" type="text" class="form-control" placeholder="5.00 " >
                                                </div>
                                        
                                               <div class="col-xs-2">

                                                <input id="fname" name="name" type="text" class="form-control" placeholder="5.00">
                                                </div>
                                                </div> 
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


                    