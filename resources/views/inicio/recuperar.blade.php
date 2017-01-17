<!doctype html>
 <style type="text/css" >
    


.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
legend{
    color: #36A0FF;
}
}
</style>

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
          {!!Html::script('js/jquery-1.9.0.min.js')!!}
  {!!Html::script('js/jquery.maskedinput.js')!!}
 <script type="text/javascript">
jQuery(function($) {
      $('input,form').attr('autocomplete','off');
      $('textarea,form').attr('autocomplete','off');
   });
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
        </div>        Ayuda
      </h1> </header>
    
                    <div class="auth-content">
                        <p class="text-xs-center">Recuperacion de contraseña</p>
                       
                           
                           {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
                            <div class="form-group"> 
                             <i class="fa fa-google-plus bigicon"></i>

                            
                    
                       
<label for="email">Email</label>
 <input type="text" class="form-control" name="email" id="email" required > </div>

      
                            
                      
                           
                    
                            <div class="form-group"> <button type="submit" class="btn btn-block btn-primary">Enviar</button> </div>
                              
                            {!!Form::close()!!}
                          
                        
                    </div>
                </div>
             
                <div class="text-xs-center">
                    <a href="/sesion" class="btn btn-secondary rounded btn-sm"> <i class="fa fa-arrow-left"></i> Regresar </a>
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
        
        {!! Html::script('js/vendor.js') !!}
        {!! Html::script('js/app.js') !!}
    </body>

</html>