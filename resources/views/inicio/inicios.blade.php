

<!doctype html>
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
        
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Inicio de Sesion - Free Dashboard Theme | HTML Version </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/vendor.css">
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
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
        <div class="logo">
            <span class="l l1"></span>
            <span class="l l2"></span>
            <span class="l l3"></span>
            <span class="l l4"></span>
            <span class="l l5"></span>
        </div>        Inicio de sesion
      </h1> </header>
                    <div class="auth-content">
                        <p class="text-xs-center">INICIAR SESION PARA CONTINUAR</p>
                        <form id="login-form" action="/index.html" method="GET" novalidate="">
                            <div class="form-group"> 
                                <label for="username">Usuario</label> 
                                 <input type="email" class="form-control underlined" name="username" id="username" placeholder="Usuario" required> 
                            </div>
                            <div class="form-group"> 
                                 <label for="password">Contraseña</label> 
                                 <input type="password" class="form-control underlined" name="password" id="password" placeholder="Contraseña" required> 
                            </div>
                             

                            <div class="form-group"> 
                            <label for="remember">
            <input class="checkbox" id="remember" type="checkbox"> 
            <span>Recordarme</span>
          </label> <a href="reset.html" class="forgot-btn pull-right">¿Olvido su contraseña?</a> </div>
                            <div class="form-group"> <button type="submit" class="btn btn-block btn-primary">Entrar</button> </div>
                            
                        </form>
                    </div>
                </div>
                <div class="text-xs-center">
                    <a href="index.html" class="btn btn-secondary rounded btn-sm"> <i class="fa fa-arrow-left"></i> Volver </a>
                </div>
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
        {!! Html::script('js/vendor.js') !!}
        {!! Html::script('js/app.js') !!}
    </body>

</html>
