@extends('probandos')

@section('content')
<style>
.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
thead{
     background: #ffffcc;
     border:1;

}

h2,h1,span
{
    color: #36A0FF;

}

.gris{
    background:#8c8c8c; 
    color:white;
}
.quitarborder{
 
    color:white;
}

.formatoTabla {
    
    font-size: 16px;
    text-align: center;
   }
    
</style>
  <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">

                    
                    <div class="title-block">
                     <span class="col-md-1  text-center">
         <i class="fa fa-money bigicon"></i>
          </span>

                        <h1 class="title">
    

        Registro de Libro Diario
    </h1>


                        <p class="title-description"> Libro Diario  </p>
                    </div>


                        
                    <section class="section">

                                <button type="submit"  class="btn btn-primary btn-lg">Imprimir</button>
                            
                        <div class="row">
                            
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                          
                                        <section class="example">
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

                                        </section>
                                    </div>
                                
                            </div>
                           </div>
                           </section>
                           </article>

                          
                           

@stop
