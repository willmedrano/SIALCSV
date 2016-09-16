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

h2
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
                    <div class="title-block">
                        <h1 class="title">
    

        Tabla Proveedores
    </h1>


                        <p class="title-description"> Proveedores  </p>
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
                                                        <th>#</th>
                                                        <th>Nombre</th>
                                                        <th>Telefono</th>
                                                        <th>NIT</th>
                                                        <th>Dirreccion</th>
                                                        <th colspan="2" rowspan="">Acciones</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($prove as $prove)

                                                    <tr>
                                                        <th scope="row" bgcolor="#ffffe6">{{  $prove->id }}</th>
                                                        <td>{{ $prove->nom }}</td>
                                                        <td>{{ $prove->tel }}</td>
                                                        <td>{{ $prove->NIT }}</td>
                                                        <td>{{ $prove->dir }}</td>
                                                        <td><button type="submit"  class="btn btn-info btn-sm">Modificar</button></td>
                                                        <td><button type="submit"  class="btn btn-sm gris" >Desactivo</button></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">{{  $prove->id }}</th>
                                                        <td>{{ $prove->nom }}</td>
                                                        <td>{{ $prove->tel }}</td>
                                                        <td>{{ $prove->NIT }}</td>
                                                        <td>{{ $prove->dir }}</td>
                                                        <td><button type="submit"  class="btn btn-info btn-sm">Modificar</button></td>
                                                        <td><button type="submit"  class="btn btn-primary btn-sm">  A c t i v o  </button></td>
                                                    </tr>
                                                    

                                                    @endforeach
                                                      
                                                </tbody>
                                            </table>
                                        </section>
                                    </div>
                                
                            </div>
                           </div>
                           </section>
                           </article>

                          
                           

@stop()
