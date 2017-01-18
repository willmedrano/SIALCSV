<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reporte de Empleado</title>
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
 
          <h3 class="box-title">REPORTE DE EMPLEADO </h3>
            <p>Fecha :<?=  $date1; ?></p>
            <p>Impresión : <?=  $date2; ?></p>
           
           
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
                      <th style="width: 10px">Nombre</th>
                      <th style="width: 10px">Apellido</th>
                      <th style="width: 10px">DUI</th>
                      <th style="width: 10px">NIT</th>
                      <th style="width: 10px">Telefono</th>
                      <th style="width: 10px">Cargo</th>
                      <th style="width: 10px">Salario</th>
                    </tr>
                  </thead>
                    <tbody> 

                  <?php foreach($data as $empleado){ ?>
                 
                    <tr>
                      <td style="width:10px"><?=$empleado->nomEmp; ?></td>
                      <td style="width:10px"><?=$empleado->apeEmp; ?></td>
                      <td style="width:10px"><?=$empleado->DUIEmp; ?></td>
                      <td style="width:10px"><?=$empleado->NITEmp; ?></td>
                      <td style="width:10px"><?=$empleado->telEmp; ?></td>
                      <td style="width:10px"><?=$empleado->cargoEmp; ?></td>
                       <td style="width:10px"><?=$empleado->sueldoEmp; ?></td>
                    </tr>
                    
                    <?php  } ?>
                    
                  </tbody>

                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
              </div><!-- /.box -->

              
            </div>


	
</body>
</html>


