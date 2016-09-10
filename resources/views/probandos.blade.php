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
      
    {!!Html::style('css/app.css')!!}  
    
 |        
         
        <!-- Place favicon.ico in the root directory -->
        
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
    </head>

    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
          <i class="fa fa-bars"></i>
        </button> </div>
                    <div class="header-block header-block-search hidden-sm-down">
                        <form role="search">
                            <div class="input-container"> <i class="fa fa-search"></i> <input type="search" placeholder="Search">
                                <div class="underline"></div>
                            </div>
                        </form>
                    </div>
                    <div class="header-block header-block-buttons">
                        <a href="https://github.com/modularcode/modular-admin-html" class="btn btn-oval btn-sm rounded-s header-btn"> <i class="fa fa-github-alt"></i> . </a>
                        <a href="https://github.com/modularcode/modular-admin-html/releases/download/v1.0.1/modular-admin-html-1.0.1.zip" class="btn btn-oval btn-sm rounded-s header-btn"> <i class="fa fa-cloud-download"></i> . </a>
                    </div>
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            <li class="notifications new">
                                <a href="" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <sup>
                <span class="counter">8</span>
              </sup> </a>
                                <div class="dropdown-menu notifications-dropdown-menu">
                                    <ul class="notifications-container">
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p> <span class="accent">Zack Alien</span> pushed new commit: <span class="accent">Fix page load performance issue</span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p> <span class="accent">Amaya Hatsumi</span> started new task: <span class="accent">Dashboard UI design.</span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p> <span class="accent">Andy Nouman</span> deployed new version of <span class="accent">NodeJS REST Api V3</span> </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <footer>
                                        <ul>
                                            <li> <a href="">
                      View All
                    </a> </li>
                                        </ul>
                                    </footer>
                                </div>
                            </li>
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url('assets/faces/3.jpg')"> </div> <span class="name">
                Willian Medrano
              </span> </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="#"> <i class="fa fa-user icon"></i> Perfil </a>
                                    <a class="dropdown-item" href="#"> <i class="fa fa-bell icon"></i> Notificaciones </a>
                                    <a class="dropdown-item" href="#"> <i class="fa fa-gear icon"></i> Configuraciones </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/log/create"> <i class="fa fa-power-off icon"></i> Salir </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div> SIALCSV </div>
                        </div>
                        <nav class="menu">
                            <ul class="nav metismenu" id="sidebar-menu">
                                <li class="active">
                                    <a href="index.html"> <i class="fa fa-home"></i> Inicio </a>
                                </li>
                                <li>
                                    <a href=""> <i class="fa fa-th-large"></i> Inventario <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="/prove/create">
                    Ingresar Producto
                  </a> </li>
                                        <li> <a href="/prove/create">
                    Ver Productos
                  </a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=""> <i class="fa fa-bar-chart"></i> Graficas <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="charts-flot.html">
                    PRUEBAS
                  </a> </li>
                                        <li> <a href="charts-morris.html">
                    PRUEBAS2
                  </a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=""> <i class="fa fa-table"></i> Tablas <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="/prove">
                    Proveedores
                  </a> </li>
                                        <li> <a href="responsive-tables.html">
                    Empleados
                  </a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="forms.html"> <i class="fa fa-pencil-square-o"></i> Formulario </a>
                                </li>
                                <li>
                                    <a href=""> <i class="fa fa-desktop"></i> Proveedores <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="buttons.html">
                    Paquetes
                  </a> </li>
                                        <li> <a href="cards.html">
                    Escuelas
                  </a> </li>
                                        <li> <a href="typography.html">
                    Contratos
                  </a> </li>
                                        <li> <a href="icons.html">
                    Pagos
                  </a> </li>
                                        <li> <a href="grid.html">
                    Formulario
                  </a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=""> <i class="fa fa-file-text-o"></i> Ventas <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="login.html">
                    credito
                  </a> </li>
                                        <li> <a href="signup.html">
                    contado
                  </a> </li>
                                        <li> <a href="reset.html">
                    Carrito
                  </a> </li>
                                        <li> <a href="error-404.html">
                    Error 404 App
                  </a> </li>
                                        <li> <a href="error-404-alt.html">
                    Error 404 Global
                  </a> </li>
                                        <li> <a href="error-500.html">
                    Error 500 App
                  </a> </li>
                                        <li> <a href="error-500-alt.html">
                    Error 500 Global
                  </a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="https://github.com/modularcode/modular-admin-html"> <i class="fa fa-github-alt"></i> Compras </a>
                                </li>
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
                                                <div class="col-xs-4"> </div>
                                                <div class="col-xs-4"> <label class="title">Estatico</label> </div>
                                                <div class="col-xs-4"> <label class="title">Normal</label> </div>
                                            </div>
                                            <div class="row hidden-md-down">
                                                <div class="col-xs-4"> <label class="title">Scroll:</label> </div>
                                                <div class="col-xs-4"> <label>
                                    <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed" >
                                    <span></span>
                                </label> </div>
                                                <div class="col-xs-4"> <label>
                                    <input class="radio" type="radio" name="sidebarPosition" value="">
                                    <span></span>
                                </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Cabeza:</label> </div>
                                                <div class="col-xs-4"> <label>
                                    <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                    <span></span>
                                </label> </div>
                                                <div class="col-xs-4"> <label>
                                    <input class="radio" type="radio" name="headerPosition" value="">
                                    <span></span>
                                </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Pie:</label> </div>
                                                <div class="col-xs-4"> <label>
                                    <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                    <span></span>
                                </label> </div>
                                                <div class="col-xs-4"> <label>
                                    <input class="radio" type="radio" name="footerPosition" value="">
                                    <span></span>
                                </label> </div>
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
                                <a href=""> <i class="fa fa-cog"></i> Personalizar </a>
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
        {!! Html::script('js/vendor.js') !!}
        {!! Html::script('js/app.js') !!}
                
        
    </body>

</html>