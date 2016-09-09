@extends('probandos')
<?php $message=Session::get('message')?>


@section('content')

<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content forms-page">
                    <div class="title-block">
                        <h3 class="title">
        Proveedores
    </h3>
                        <p class="title-description"> Registro de Proveedores </p>
                    </div>
            <!--<div class="subtitle-block">
                        <h3 class="subtitle">
        Formulario de Producto
    </h3> </div>-->
                    <section class="section">
                        <div class="row sameheight-container">
                            <div >
                                <div class="card card-block sameheight-item" >
                                    <div class="title-block" align="center">
                                        <h3 class="title">
                        Formulario de Proveedores
                    </h3> </div>
                                    <form role="form" >
                                      
                                        <div class="form-group"> 
                                             <label class="control-label">NOMBRE: </label>
                                             <input type="text" class="form-control underlined" placeholder="Escriba el nombre"> 
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">NIT: </label> 
                                            <input type="text" class="form-control underlined" placeholder="0000-000000-000-0">
                                        </div>
                                        <div class="form-group">
                                                <label class="control-label">TELEFONO: </label> 
                                                <input type="text" class="form-control underlined" placeholder="0000-0000" 
                                                class="fa fa-hpome"
                                                > 
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">DIRECCION: </label> 
                                            <input type="text" class="form-control underlined" placeholder="Direccion"> 
                                        </div>
                                         <div class="form-group">
                                            <button  class="btn-success">Guardar</button>
                                            <button  class="btn-secundary">Limpiar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </section>



         </article>




        @stop