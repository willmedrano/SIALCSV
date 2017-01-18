<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reporte de Ventas</title>
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
          
          
          <th>Compra</th>
         
            <th>Vendedor</th>                                            
          <th>Cliente</th>
                                                        
                                                        
          <th>Fecha</th>
          <th>Total</th>
        <th>Descripción</th>
        </tr>

      </thead>
       
      <tbody>
      <?php
          $total=0;
        ?>  
         @foreach($detalle as $comps)
          
                                                    <tr class="v">
                                                        
                                                        <th  scope="row" >#{{ $comps->id }} </th>
                                                    <td>{{ $comps->nomEmp}}</td>
                                                      <td>{{ $comps->nomcli  }}

                                                      </td>

                                                        
                                                        
                                                        
                                                        <?php $date = new DateTime($comps->fechaf); ?>
                                                        <td><?php  echo $date->format('d/m/Y'); ?></td>
                                                        
                                                        <td> $ {{ $comps->total}}</td>
                                                        <td> {{ $comps->detalle}}</td>
                                                        
                                                      
                                                                                                                
                                                       
                                                    </tr>
                                                    
         
        @endforeach
       

      </tbody>
    </table>
  </div><!-- /.box-body -->
</div><!-- /.box -->


</div>



</body>
</html>
