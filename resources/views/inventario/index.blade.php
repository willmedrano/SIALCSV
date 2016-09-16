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

h2,h1
{
    color: #36A0FF;
}
.gris{
    background:#8c8c8c; 
    color:white;
}


    
</style>

            <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">


<!--Inicio de modal -->
                <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridModalLabel">Modificar Producto</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
          <form class="form-horizontal" method="post">
                    <fieldset>
                        

                        <div class="form-group">
            
                            <span class="col-md-1  text-center"><i class="fa fa-barcode bigicon icon_nav" ></i></span >
                                                      <div class="col-md-3">

                                <input id="cod" name="cod" type="text" placeholder="Codigo del Producto" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <span class="col-md-1  text-center"><i class="fa fa-book bigicon"></i></span>
                            <div class="col-md-3">
                                <input id="nomP" name="nomP" type="text" placeholder="Nombre del Producto" class="form-control">
                                
                            </div>

                            <span class="col-md-1  text-center"><i class="fa fa-dropbox bigicon"></i></span>
                            <div class="col-md-3">
                                <input id="nomP" name="nomP" type="text" placeholder="Unidades de una Caja" class="form-control">
                                
                            </div>
                        </div>

                        
<br>
                        <div class="form-group">
                            <span class="col-md-1  text-center"><i class="fa fa-tags bigicon"></i></span>
                            <div class="col-md-3">
                                <input id="marca" name="marca" type="text" placeholder="Marca " class="form-control">
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <span class="col-md-1  text-center"><i class="fa fa-percent bigicon"></i></span>
                            <div class="col-xs-3">
                                <input id="tipo" name="tipo" type="text" placeholder="porcentaje de ganancia por unidad" class="form-control">
                            </div>

                            

                        </div>
                        <br>
                        <div class="form-group">
                            

                            <span class="col-md-1  text-center"><i class="fa fa-percent bigicon"></i></span>
                            <div class="col-xs-3">
                                <input id="tipo" name="tipo" type="text" placeholder="porcentaje de ganancia por Caja" class="form-control">
                            </div>

                        </div>
                        <br>
                        
                         <div class="form-group">
                            <span class="col-md-1  text-center"><i class="fa fa-truck bigicon"></i></span>
                            <div class="col-xs-3">
                                <select class=" form-control">
                            <option>--Selecione un Proveedor--</option>
                            <option>Vendedor</option>
                            <option>Otros</option>
                           
                        </select>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <span class="col-md-1 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-7">
                                <textarea rows="2" class="form-control" id="message" name="message" placeholder="Agregue la descripcion del producto" rows="7"></textarea>
                            </div>
                        </div>
                            <br>
                        
                    </fieldset>
                </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--fin de modal -->
                    <div class="title-block">
                        <h1 class="title">
    

        Tabla Productos
    </h1>


                        <p class="title-description"> Productos  </p>
                    </div>


                        
                    <section class="section">


                            
                                <button type="submit"  class="btn btn-primary btn-lg">Imprimir</button>
                            
                            
                        <div class="row">
                            
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title">
                            
                        </h3> </div>
                                        <section class="example">
                                            <table class="table table-bordered table-hover" style="width:100%" >
                                                <thead align="center">
                                                    <tr>
                                                        <th>Codigo</th>
                                                        <th>Nombre</th>
                                                        <th>Marca</th>
                                                        <th>Costo Promedio</th>
                                                        <th>Precio de venta</th>
                                                        <th>#Unidades Caja</th>
                                                        <th>Precio de Caja</th>
                                                        <th>Proveedor</th>
                                                        <th>Descripcion</th>
                                                        <th colspan="2" rowspan="">Acciones</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                

                                                    <tr>
                                                        <th scope="row" >00000000</th>
                                                        <td>Lapiz #2</td>
                                                        <td>Facela</td>
                                                        <td>0.10</td>
                                                        <td>0.11</td>
                                                        <td>12</td>
                                                        <td>1.10</td>
                                                        <td>Libreria la paz</td>
                                                        <td>lapiz amarrillo vitrina #2</td>
                                                        <td><button type="submit"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#gridSystemModal">Modificar</button></td>
                                                        <td><button type="submit"  class="btn btn-sm gris" >Desactivo</button></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" >00000001</th>
                                                        <td>Cuaderno #2</td>
                                                        <td>Facela</td>
                                                        <td>1.00</td>
                                                        <td>1.10</td>
                                                        <td>1</td>
                                                        <td>1.10</td>
                                                        <td>Libreria la paz</td>
                                                        <td>Cuaderno #2 rayado vitrina #2</td>
                                                        <td><button type="submit"  class="btn btn-info btn-sm">Modificar</button></td>
                                                        <td><button type="submit"  class="btn btn-sm btn-primary" > A c t i v o </button></td>
                                                    </tr>
                                                    
                                                    

                                                    
                                                      
                                                </tbody>
                                            </table>
                                        </section>
                                    </div>
                                
                            </div>
                           </div>
                           </section>
                           </article>

                          
                           

@stop()
