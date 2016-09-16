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
td{
     background: #ffffe6;

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
                                                        <td><button type="submit"  class="btn btn-info btn-lg">Modificar</button></td>
                                                        <td><button type="submit"  class="btn btn-lg gris" >Desactivo</button></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" bgcolor="#ffffe6">{{  $prove->id }}</th>
                                                        <td>{{ $prove->nom }}</td>
                                                        <td>{{ $prove->tel }}</td>
                                                        <td>{{ $prove->NIT }}</td>
                                                        <td>{{ $prove->dir }}</td>
                                                        <td><button type="submit"  class="btn btn-info btn-lg">Modificar</button></td>
                                                        <td><button type="submit"  class="btn btn-primary btn-lg">  A c t i v o  </button></td>
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

                           <div class="row row-sm stats-container">
                                            <div class="col-xs-12 col-sm-6 stat-col">
                                                <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> 5407 </div>
                                                    <div class="name"> Active items </div>
                                                </div> <progress class="progress stat-progress" value="75" max="100">
                                <div class="progress">
                                    <span class="progress-bar" style="width: 75%;"></span>
                                </div>
                            </progress> </div>
                                            <div class="col-xs-12 col-sm-6 stat-col">
                                                <div class="stat-icon"> <i class="fa fa-shopping-cart"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> 78464 </div>
                                                    <div class="name"> Items sold </div>
                                                </div> <progress class="progress stat-progress" value="25" max="100">
                                <div class="progress">
                                    <span class="progress-bar" style="width: 25%;"></span>
                                </div>
                            </progress> </div>
                                            <div class="col-xs-12 col-sm-6  stat-col">
                                                <div class="stat-icon"> <i class="fa fa-line-chart"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> $80.560 </div>
                                                    <div class="name"> Monthly income </div>
                                                </div> <progress class="progress stat-progress" value="60" max="100">
                                <div class="progress">
                                    <span class="progress-bar" style="width: 60%;"></span>
                                </div>
                            </progress> </div>
                                            <div class="col-xs-12 col-sm-6  stat-col">
                                                <div class="stat-icon"> <i class="fa fa-users"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> 359 </div>
                                                    <div class="name"> Total users </div>
                                                </div> <progress class="progress stat-progress" value="34" max="100">
                                <div class="progress">
                                    <span class="progress-bar" style="width: 34%;"></span>
                                </div>
                            </progress> </div>
                                            <div class="col-xs-12 col-sm-6  stat-col">
                                                <div class="stat-icon"> <i class="fa fa-list-alt"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> 59 </div>
                                                    <div class="name"> Tickets closed </div>
                                                </div> <progress class="progress stat-progress" value="49" max="100">
                                <div class="progress">
                                    <span class="progress-bar" style="width: 49%;"></span>
                                </div>
                            </progress> </div>
                                            <div class="col-xs-12 col-sm-6 stat-col">
                                                <div class="stat-icon"> <i class="fa fa-dollar"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> $780.064 </div>
                                                    <div class="name"> Total income </div>
                                                </div> <progress class="progress stat-progress" value="15" max="100">
                                <div class="progress">
                                    <span class="progress-bar" style="width: 15%;"></span>
                                </div>
                            </progress> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           

@stop()
