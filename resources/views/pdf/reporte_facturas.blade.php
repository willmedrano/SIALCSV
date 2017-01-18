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
            <h3 class="box-title">LIBRERIA CULTURAL SAN VICENTE</h3>
          <h3 class="box-title">FACTURA # {{ $fac->id }}</h3>
           <p>Fecha :<?=  $date; ?></p>
            <p>Impresión : <?=  $date1; ?>  </p>
           <p>Nombre del cliente: {{ $fac->nomcli }} </p>
             
           
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
          
          
         <th>Detalle</th>
         <th>Producto </th>
         <th>Cantidad</th>
         <th></th>
         
         
        </tr>

      </thead>
       
      <tbody>
      <?php $total=0 ?>
                                                    @foreach($detalle as $comps)
                                                    <tr class="v">
                                                        
                                                        <th  scope="row" >#{{ $comps->id }}</th>
                                                        <td>{{ $comps->nomProd}} </td>
                                                      <td>{{ $comps->cantidadv  }}

                                                      </td>

                                                        
                                                        <td colspan="" rowspan="" headers=""></td>
                                                        
                                                       
                                                        
                                                       
                                                        
                                                                                                                
                                                       
                                                    </tr>
                                                    
                                                  
                                                    
                                                    

                                                    
                                                      @endforeach
        
       

      </tbody>
      <tfoot>
        <tr align="center">
        <?php $z=( $fac->total - $fac->iva_credito );?>
                                                        <td colspan="3"><p style="font-weight: bold;">Sub-Total:</p></td>
                                                        <td colspan="1" ><p style="font-weight: bold;">$<?php echo round($z,2);?> </p></td>
                                                         </tr>
                                                        <tr align="center">
                                                        <td colspan="3"><p style="font-weight: bold;">iva credito:</p></td>
                                                        <td colspan="1" ><p style="font-weight: bold;">$ {{ $fac->iva_credito }}</p></td>
                                                         </tr>
                                                        <tr align="center">
                                                        <td colspan="3"><p style="font-weight: bold;">Total</p></td>
                                                        <td colspan="1" ><p style="font-weight: bold;">$ {{ $fac->total }}</p></td>

                                                    </tr>
      </tfoot>
    </table>

           <h3 class="box-title">Detalle</h3>
           <p>{{ $fac->detalle }}</p>
  </div><!-- /.box-body -->
</div><!-- /.box -->


</div>



</body>
</html>
