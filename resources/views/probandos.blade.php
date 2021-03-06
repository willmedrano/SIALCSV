<!DOCTYPE html>
<html class="no-js" lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SIALCSV</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    {!!Html::style('css/vendor.css')!!}  
    {!!Html::style('css/app-seagreen.css')!!}  
         
    </head>

    <body>

        <div class="main-wrapper">

            <div class="app" id="app">

                <header class="header">

                    <div class="header-block header-block-collapse hidden-lg-up">

                        <button class="collapse-btn" id="sidebar-collapse-btn">
                            <i class="fa fa-bars"></i>
                        </button> 

                    </div>
                    
                    <div class="header-block header-block-nav">

                        <ul class="nav-profile">

                           

                            <li class="profile dropdown">

                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">

                                    <div class="img" style="background-image: url('../imagenes/{!!Auth::user()->imag!!}')">
                                    </div>

                                    <span class="name">

                                        {!!Auth::user()->login!!} 

                                    </span>
                                </a>

                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    
                                    
                                    <a class="dropdown-item" href="/notificaciones">

                                        <i class="fa fa-bell icon"></i>
                                         Notificaciones
                                    </a>

                                    <a class="dropdown-item" href="/cambiousuario">

                                        <i class="fa fa-gear icon"></i>
                                             Configuraciones
                                     </a>

                                    <div class="dropdown-divider">
                                        
                                    </div>

                                    <a class="dropdown-item" href="/logout">

                                        <i class="fa fa-power-off icon"></i>
                                             Salir
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div>

                </header>

                <aside class="sidebar">
                    
                    <div class="sidebar-container">

                        <div class="sidebar-header">

                            <div class="brand">
                                <div class="logo">
                                    <span class="l l1"></span>
                                    <span class="l l2"></span>
                                    <span class="l l3"></span> 
                                    <span class="l l4"></span>
                                    <span class="l l5"></span>
                                </div>

                                SIALCSV

                            </div>
                        </div>
                        
                        <!-- Aqui inicia el menu nav  -->
                        <nav class="menu">
                           
                            <ul class="nav metismenu" id="sidebar-menu"><!-- Aqui inicia la lista del menu u-->
                                
                                <li class="active"><!-- inicia el menu Inicio i -->
                                    <a href="/inicio"> <i class="fa fa-home"></i> Inicio </a>
                                </li> <!-- Aqui finaliza el menu i-->

                                <li><!-- Aqui inicia el menu de los empleados i con sus respectivas opciones -->

                                    <a href="">
                                        <i class="fa fa-user"></i>
                                            Empleados
                                        <i class="fa arrow"></i>
                                    </a>

                                    <ul>
                                        
                                        <li> 
                                            <a href="/log/create">
                                                Ingresar Empleado
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/log/">
                                                Modificar Empledado
                                            </a>
                                        </li>
                                        <li> 
                                            <a href="/pagar/create">
                                                Pago de Empleado
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/pagar">
                                                Ver Pagos
                                            </a>
                                        </li>
                                    </ul>
                                </li><!-- Aqui finaliza el menu de empleados i -->

                                <li><!-- Aqui inicia el menu de los Inventario i con sus respectivas opciones -->
                                    <a href="">
                                        <i class="fa fa-th-large"></i>
                                          Inventario 
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/inve/create">
                                                Ingresar Producto
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/inve/">
                                                Ver Productos
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/lotes/">
                                                Inventario Disponible
                                            </a>
                                        </li>
                                    </ul>
                                </li><!-- Aqui finaliza el menu de Inventario i -->

                                <li><!-- Aqui inicia el menu de los Escuelas i con sus respectivas opciones -->
                                    <a href="">
                                        <i class="fa fa-th-large"></i>
                                          Escuelas
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul>
                                        <li> 
                                            <a href="/escuela/create">
                                                Ingresar Escuelas
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/escuela/">
                                                Ver escuelas
                                            </a>
                                        </li>
                                    </ul>
                                </li><!-- Aqui finaliza el menu de Escuelas i -->

                                <li><!-- Aqui inicia el menu de los paquetes i con sus respectivas opciones -->
                                    <a href="">
                                        <i class="fa fa-dropbox"></i>
                                             paquetes 
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/paquete/create">
                                               Ingresar paquete
                                            </a>
                                        </li>
                                        <li>
                                        <a href="/comprapaquete/create">
                                            Compra de Paquetes
                                        </a>
                                        <li>
                                            <a href="/contrato/create">
                                                Ingresar contrato
                                            </a>
                                        </li>
                                
                                        <li> 
                                            <a href="/contrato/">
                                                Ver contratos
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li><!-- Aqui finaliza el menu de Paquete i -->

                                <li><!-- Aqui inicia el menu de los compras i con sus respectivas opciones -->
                                    <a href="">
                                        <i class="fa fa-shopping-cart "></i>
                                            Compras
                                        <i class="fa arrow"></i> 
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/compra/create">
                                                Ingresar compras
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/cuotas/">
                                                Pago de cuotas
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/compra/">
                                                Ver detalle de compras
                                            </a>
                                        </li>
                                    </ul>
                                </li><!-- Aqui finaliza el menu de Compras i -->

                                <li><!-- Aqui inicia el menu de los Proveedores i con sus respectivas opciones -->
                                    <a href="">
                                        <i class="fa fa-truck"></i>
                                            Proveedores
                                        <i class="fa arrow"></i> 
                                    </a> 
                                   <ul>
                                        <li>
                                            <a href="/prove/create">
                                                Ingresar proveedor
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/prove/">
                                                Ver proveedor
                                            </a>
                                        </li>
                                    </ul>
                                </li><!-- Aqui finaliza el menu de Proveedor i -->

                               

                                <li><!-- Aqui inicia el menu de los Ventas i con sus respectivas opciones -->
                                    <a href=""> 
                                        <i class="fa fa-file-text-o"></i>
                                            Ventas 
                                        <i class="fa arrow"></i> 
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/ventas/create">
                                                Realizar Venta
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/ventas">
                                                facturas pendientes
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/aux5">
                                                Facturas
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li><!-- Aqui finaliza el menu de Ventas i -->

                                <li><!-- Aqui inicia el menu de los Reportes i con sus respectivas opciones -->
                                    <a href="">
                                        <i class="fa fa-file-text-o"></i>
                                            Reportes
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/reporte2">
                                                Compras
                                            </a>
                                            <a href="/reporte8">
                                                Detalle de compra
                                            </a>
                                            <a href="/reporte3">
                                                Ventas
                                            </a>
                                            <a href="/reporte7">
                                                Perdidas y Ganancias
                                            </a>
                                            <a href="/reporte4">
                                                Inventario
                                            </a>
                                            <a href="/reporte6">
                                                Catalogo
                                            </a>
                                            <a href="/reporte">
                                                Empleado
                                            </a>
                                            <a href="/reporte5">
                                                Pago empleado
                                            </a>
                                        </li>
                                    </ul>
                                </li> <!-- Aqui finaliza el menu de Reportes i -->
                                    
<li><!-- Aqui inicia el menu de los Reportes i con sus respectivas opciones -->
                                    <a href="">
                                        <i class="fa ">$</i>
                                            Entradas y salidas
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/aux5/create">
                                                Ver entradas y salidas
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                    
                                

                                 <li><!-- Aqui inicia el menu de los Seguriidad i con sus respectivas opciones -->
                                    <a href="">
                                        <i class="fa fa-github-alt"></i>
                                            Seguridad
                                        <i class="fa arrow"></i>
                                    </a>
                                    
                                    <ul>
                                        <li>
                                            <a href="/permitir/">
                                                Permitir Acceso
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/negar/">
                                                Administrar Acceso
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/bitacora/">
                                                bitacora
                                            </a>
                                        </li>
                                    </ul>
                                </li><!-- Aqui finaliza el menu de Seguridad i -->

                            </ul>
                        </nav>
                    </div>
                    <footer class="sidebar-footer">
                        <ul class="nav metismenu" id="customize-menu">
                            <li>
                                <ul>
                                    <li class="customize">
                                        <div class="customize-item">
                                            <div class="row customize-header">
                                            
                                                <div class="col-xs-4" align="center">
                                                    <label class="title">Estatico</label> 
                                                </div>
                                                <div class="col-xs-4" align="center">
                                                    <label class="title">Normal</label> 
                                                </div>
                                            </div>

                                            <div class="row hidden-md-down">

                                                <div class="col-xs-4">
                                                    <label class="title">Scroll:</label>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="sidebarPosition" value="">
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <label class="title">
                                                        Cabeza:
                                                    </label>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="headerPosition" value="">
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <label class="title">
                                                        Pie:
                                                    </label>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="footerPosition" value="">
                                                        <span></span>
                                                    </label>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="customize-item">
                                            <ul class="customize-colors">
                                                <li> <span class="color-item color-red" data-theme="red"></span> </li>
                                                <li> <span class="color-item color-orange" data-theme="orange"></span> </li>
                                                <li> <span class="color-item color-green" data-theme="green"></span> </li>
                                                <li> <span class="color-item color-seagreen" data-theme="seagreen"></span> </li>
                                                <li> <span class="color-item color-blue active" data-theme=""></span> </li>
                                                <li> <span class="color-item color-purple" data-theme="purple"></span> </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <a href="">
                                     <i class="fa fa-cog"></i>
                                        Personalizar
                                </a>
                            </li>
                        </ul>
                    </footer>
                </aside>
            <div>      
                @yield('content') 
            </div>
            
            <div class="ref" id="ref">
                <div class="color-primary"></div>
                <div class="chart">
                    <div class="color-primary"></div>
                    <div class="color-secondary"></div>
                </div>
            </div>

        {!!Html::script('js/vendor.js')!!}
        {!!Html::script('js/app.js')!!}
        @section('scripts')
      <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
            }
        </script>
        @show

        
    </body>

</html>