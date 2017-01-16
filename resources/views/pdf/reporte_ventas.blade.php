<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reporte de Compras</title>
<style>
.bigicon { 
    font-size: 35px;
    color: #36A0FF;
}
thead {
     background: #ffffcc;
     

}
thead {
     background: #ffffcc;
   

}
table {
  border-collapse: collapse;
}

h2,h1,span
{
    color: #36A0FF;

}
.gris{
    background:#8c8c8c; 
    color:white;
}


    
</style>
</head>
<body>
<div class="col-md-12">
  <div class="box-body">
    <div class="box-header with-border">
      <table width="556" border="" align="" cellpadding="10">
        <tr>
          <td align="left"><img class="al" src="assets/faces/libreria.png" width="125px" height="75px"></td>

          <td width="350" align="center" colspan="5">
 
          <h3 class="box-title">REPORTE DE VENTA </h3>
           <p>Fecha :<?=  $date; ?></p>
            <p>Impresión : <?=  $date1; ?></p>
           
            </td>
          <td>&nbsp;</td>
        </tr>
         </tr>
        
        
    </table>
  
  </div><!-- /.box-header -->
  <div class="box-body">
    <table class="table" border="1" style="width:100%" >
      <thead>
        <tr>
          
          
          <th bgcolor="#e5eef7">Cod Producto</th>
          <th bgcolor="#e5eef7">Producto</th>
          <th bgcolor="#e5eef7">Marca</th>
          <th bgcolor="#e5eef7">Cantidad</th>
          <th bgcolor="#e5eef7">Fecha de Venta</th>
          <th bgcolor="#e5eef7">Monto Total</th>
        </tr>

      </thead>
       
      <tbody>
      <?php
          $total=0;
        ?>
         @foreach($detalle as $prod)
          <?php
         
                                            
          $date = new DateTime($prod->fechaf);
                                       
          ?>
         
            <tr>
              
              <td align="center">{{ $prod->cod }} </td>
              <td align="center"> {{ $prod->nomProd }}</td>
              <td align="center">{{ $prod->marca }}</td>
                 <td align="center">{{ $prod->cantidadv }}</td>
              <td align="center"><?php  echo $date->format('d/m/Y'); ?></td>
              
              <td align="center">$ {{$prod->total}}<?php 
          $total= $total + $prod->total;
          
        ?></td>
            </tr>
         
        @endforeach
        <tr>
          
            <td COLSPAN="5" align="right">Total:</td>
            <td align="center">$ <?php  echo round($total, 2); ?> </td>
        </tr>

      </tbody>
    </table>
  </div><!-- /.box-body -->
</div><!-- /.box -->


</div>



</body>
</html>
