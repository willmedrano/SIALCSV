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
h2,h1,span
{
    color: #36A0FF;

}
.title{
  font-size: 25px;  
}
 .title-description{
   font-size: 0px;   
 } 
 .gris{
    background:#8c8c8c; 
    color:white;
}  
#div1 {
    overflow:scroll;
    height:200px;
    width: 270px;
}

#div1 table {
    
}

</style>
 <!-- width:500px;  Este es opcional si se lo pongo a la tabla es para que aparesca horizontal el sroll-->
               
 <article class="content forms-page">         
                   
        <div class="title-block">
            <span class=""><i class="fa fa-archive bigicon icon_nav" > Notificaciones </i></span>
                <p class="title-description"> Notificaciones del SIALCSV </p>
        </div>                 
               
              
        {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
        {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
        {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
        {!!Html::style('assets/css/style.css')!!}  
        {!!Html::style('assets/css/main-style.css')!!}

        <div class="panel panel-primary">
            
            <div class="panel-heading">
                <h1 class="panel-title">Formulario de Notificaciones</h1>
            </div>

                <h2 align="center">Notificaciones</h2>
                    
                    <section class="section"> 
                        
                        <div>
                            
                            <div class="card card-block sameheight-item">
          
                                <div class="row">
                                    <!--page header-->
                                    
                                    <div class="col-lg-12">
                                        
                                        <h3 class="page-header">Notificaciones por fecha Fechas</h3>

                                    </div>
                                    <!--end page header-->
                                </div>
                                <br>
                                <br>
                                
                                <div class="row">
                 
                                    <div class="col-lg-4">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                Control de Pagos  a 15 días
                                            </div>
                                            <div class="panel-body">
                                             @foreach($cuota as $cuot1)

                             
               <?php
                $dt =date("Y/m/d"); 
                ?>
            
                
        
                                            @endforeach
                                                <p>Pago de cuotas al proveedor</p>
                                            </div>
                                            <div class="panel-footer">
                                                Control de pagos 
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        
                                        <div class="panel panel-warning active">
                                            <div class="panel-heading">
                                                Control de Pagos  a 5 días
                                            </div>

                                            <div class="panel-body">
                                                <p>Pago de cuotas al proveedor</p>
                                            </div>
                                            
                                            <div class="panel-footer">
                                                Control de Pagos 
                                            </div>
                                        </div>
                                    </div>

                                    <!--End Default Pannel, Primary Panel And Success Panel   -->
                                    
                                    <div class="col-lg-4">
                                        
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">
                                                Control de Pagos con días de retrazo
                                            </div>
                                            <div class="panel-body">
                                                <p>Pago de cuotas al proveedor tardias.</p>
                                            </div>
                                            <div class="panel-footer">
                                                Control de Pagos
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                              
                                <div class="row">
                                    <!--page header-->
                                    
                                    <div class="col-lg-12">
                                        
                                        <h3 class="page-header">Notificaciones de stock minimo de productos</h3>

                                    </div>
                                    <!--end page header-->
                                </div>
                                <div class="row">

                                   <div class="col-lg-4">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                            Control de stock mínimo 
                                                  
                                            </div>
                                            <div class="panel-body">
                                               
                                                         <div id="div1">
                                                 <!-- Calculo de stock minimo -->
                                                            <table class="table table-hover">
                                                        
                                                                <thead>
                                                                    <tr>
                                                                        <th>Notificaciones 
                                                                            <strong>
                                                                            <?php $con=0; $a=0; $b=0; $c=0; $cc=0; ?>
                                                                            @foreach($lotes as $pro)
                                                                            <?php 
                                                                           

                                                                            
                                                                            
                                                                    $a=$pro->canlote;//LO que tengo en lote de unidades caja
                                                                        $b= round($a,2);//es para decir cuales son las unidades disponibles
                                                                            
                                                                        $c=$pro->minimo;//paea tener las unidades minimas que me forman la caja de la tabla producto
                                                                         $cc=$c+5; // es para condición 5 mas el minimo

                                                                                if($a>$c)
                                                                                {
                                                                                 $con=$con+1;
                                                                                }
                                                                            ?>
                                                                            @endforeach
                                                                            <?php
                                                                            if($con > 0)
                                                                            {
                                                                            echo $c;
                                                                                 }
                                                                            ?>
                                                                            </strong>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $contap=1; ?>
                                                                    @foreach($lotes as $pro)
                          
                                                                        <?php

                                                                         $a=($pro->canlote/$pro->uniCaja);//LO que tengo en lote de unidades caja
                                                                        $b= $a;//es para decir cuales son las unidades disponibles
                                                                            
                                                                        $c=$pro->minimo;//paea tener las unidades minimas que me forman la caja de la tabla producto
                                                                         $cc=$c+5; // es para condición 5 mas el minimo

                                                                        if($a>$c){
                                                                            ?>
                                                                        
                                                                                <tr>
                                                                                    <td><p>Cuando  productos disponibles son mayores al mínimo establecido: {{ $pro->cod }}
                                                                                    {{ $pro->nomProd }}
                                                                                    </p></td>
                                                                                </tr>
                                                                           
                                                                        
                                                                            <?php
                                                                             }
                                                                             ?>
                                                                
                     
                                                                    @endforeach
                                                                 </tbody>
                                                            </table>
                                                       
                                                </div>
                               <!-- Finaliza el calculo stock minimo -->
                                                
                                            </div>
                                            <div class="panel-footer">
                                                 Control de stock  
                                            </div>
                                        </div>
                                    </div>
                                    <!--Info Pannel, Warning Panel And Danger Panel   -->
                                    <div class="col-lg-4">
                                         <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                Control de stock mínimo
                                            </div>
                                            <div class="panel-body">
                                             <!-- Calculo de stock minimo -->
                                                    <?php $contap=1; ?>
                                                @foreach($lotes as $pro)
      
                                                <?php

                                                     $a=($pro->canlote/$pro->uniCaja);//LO que tengo en lote de unidades caja
                                                    $b= $a;//es para decir cuales son las unidades disponibles
                                                          
                                                    $c=$pro->minimo;//paea tener las unidades minimas que me forman la caja de la tabla producto

                                                    if($b==$c){
                                                        ?>
                                                    <table class="table table-hover">
                                                        
                                                        <thead>
                                                            <tr>
                                                                <th>Notificaciones <?php echo $contap++;?></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><p>Cuando  productos disponibles son iguales al mínimo establecido: {{ $pro->cod }}
                                                                {{ $pro->nomProd }}
                                                                </p></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    
                                                    <?php
                                                    }
                                                 ?>
                                            
 
                                @endforeach
                               <!-- Finaliza el calculo stock minimo -->
                                                
                                            </div>
                                            <div class="panel-footer">
                                                Control de stock 
                                            </div>
                                        </div>
                                    </div>
               
                                    <div class="col-lg-4">
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">
                                                Control de stock mínimo 
                                            </div>
                                            <div class="panel-body">
                                            <!-- Calculo de stock minimo -->
                                                    <?php $contap=1; ?>
                                                @foreach($lotes as $pro)
      
                                                <?php
                                                $a=0;
                                                     $a=($pro->canlote/$pro->uniCaja);//LO que tengo en lote de unidades caja
                                                    $b= $a;//es para decir cuales son las unidades disponibles
                                                          
                                                    $c=$pro->minimo;//paea tener las unidades minimas que me forman la caja de la tabla producto

                                                    if($b < $c){
                                                        ?>
                                                    <table class="table table-hover">
                                                        
                                                        <thead>
                                                            <tr>
                                                                <th>Notificaciones <?php echo $contap++;?></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><p>Cuando se terminaron los productos disponibles: {{ $pro->cod }}
                                                                {{ $pro->nomProd }}
                                                                </p></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    
                                                    <?php
                                                    }
                                                 ?>
                                            
 
                                @endforeach
                               <!-- Finaliza el calculo stock minimo -->
                                               
                                            </div>
                                            <div class="panel-footer">
                                                 Control de stock
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Info Pannel, Warning Panel And Danger Panel   -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>


@endsection