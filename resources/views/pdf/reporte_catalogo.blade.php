<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reporte de Catálogo</title>
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
 
          <h3 class="box-title">REPORTE DE CATÁLOGO </h3>
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
          
          
         <th>Codigo</th>
          <th>Nombre</th>
          <th>Marca</th>
          <th>Costo Promedio</th>
         
          <th>Proveedor</th>
          <th>Descripción</th>
         
        </tr>

      </thead>
       
        <tbody id="hola" class="buscar">
                                                    @foreach($detalle as $pro)
                                                    <tr>
                                                        <td>{{ $pro->cod }}</td>
                                                        <td>{{ $pro->nomProd }}</td>
                                                        <td>{{ $pro->marca }}</td>
                                                        <td> $  <?php echo round($pro->cPromedio, 2);
                                                            ?>
                                                        </td>
                                                        
                                                        <td>{{ $pro->nom }}</td>
                                                        <td>{{ $pro->desc }}</td>
                                                      
                                                    </tr>
                                                      @endforeach

                                                </tbody>

      </tbody>
    </table>
  </div><!-- /.box-body -->
</div><!-- /.box -->


</div>



</body>
</html>