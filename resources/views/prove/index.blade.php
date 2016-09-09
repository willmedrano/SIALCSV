@extends('probandos')

@section('content')

            <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title">
	

		Tabla Proveedores
	</h1>
                        <p class="title-description"> Proveedores  </p>
                    </div>
                    <section class="section">
                        <div class="row">
                            
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title">
							
						</h3> </div>
                                        <section class="example">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nombre</th>
                                                        <th>Telefono</th>
                                                        <th>NIT</th>
                                                        <th>Dirreccion</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($prove as $prove)

                                                    <tr>
                                                        <th scope="row">{{  $prove->id }}</th>
                                                        <td>{{ $prove->nom }}</td>
                                                        <td>{{ $prove->tel }}</td>
                                                        <td>{{ $prove->NIT }}</td>
                                                        <td>{{ $prove->dir }}</td>
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
