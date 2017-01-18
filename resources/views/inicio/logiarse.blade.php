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
        </div>        Registro de Usuario
        
      </h1> </header> 
                    <div class="auth-content">
                        <p class="text-xs-center">Modificacion de Usuario</p>
                        <?php $idc=Auth::user()->id; ?>
                        {!!Form::open(['route'=>['cambiousuario.update',$idc],'method'=>'PATCH'])!!}
                        
                       <!-- <form id="signup-form" action="/index.html" method="GET" novalidate="">-->
                            <div class="form-group"> 
                               <i class="fa fa-user bigicon"></i>
                            <label>Nuevo usuario</label>
                                <div class="row">
                                    <div class="col-sm-6"> 
                                    <input type="text" class="form-control" id="login" name="login" placeholder="Nombre" required="" value="{!!Auth::user()->login!!} "> </div>
                                    
                                </div>


                                     <input type="hidden" name="hi2" value="{!!Auth::user()->id!!}">

                            </div>
                            <div class="form-group"> 
                             <i class="fa fa-google-plus bigicon"></i>

                            <label>Email</label> <input type="email" class="form-control" id="correoEmp" name="correoEmp" placeholder="Correo electronico" required="" value="{!!Auth::user()->correoEmp!!} "> </div>
                             <div class="form-group"> 
                             
                            </div>

                            


                            <div class="form-group"> 
                             <i class="fa fa-unlock-alt bigicon"></i>
                            <label>Nueva Contraseña</label>

                               
                                   
                                     


                                <div class="row">

                                    <div class="col-sm-6">
                                    <p>
   
                       
   
                                     <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña" required="">
                                      <span id="passok"></span>
                                    </p>
                                     </div>
                                   
                            </div>
                               
                                                     
                            <div class="form-group"> <button type="submit" class="btn btn-block btn-primary">Aceptar</button> </div>
                            
                       {!! Form::close() !!}
                    </div>
                </div>
               
                <div class="text-xs-center">
                    <a href="/inicio" class="btn btn-secondary rounded btn-sm"> <i class="fa fa-arrow-left"></i> Regresar </a>
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
        
        
    </body>

</html>
{!! Html::script('js/vendor.js') !!}
        {!! Html::script('js/app.js') !!}
@section('scripts')
   
  <script type="text/javascript">
<link rel="stylesheet" type="text/css" media="all" href="style.css" />    
<script src="http://code.jquery.com/jquery-1.7.min.js"></script>
<script>
$(document).ready(function() {

    $('input[type=password]').keyup(function() {
        // set password variable
        var pswd = $(this).val();
        //validate the length
        if ( pswd.length < 8 ) {
            $('#length').removeClass('valid').addClass('invalid');
        } else {
            $('#length').removeClass('invalid').addClass('valid');
        }

        //validate letter
        if ( pswd.match(/[A-z]/) ) {
            $('#letter').removeClass('invalid').addClass('valid');
        } else {
            $('#letter').removeClass('valid').addClass('invalid');
        }

        //validate capital letter
        if ( pswd.match(/[A-Z]/) ) {
            $('#capital').removeClass('invalid').addClass('valid');
        } else {
            $('#capital').removeClass('valid').addClass('invalid');
        }

        //validate number
        if ( pswd.match(/\d/) ) {
            $('#number').removeClass('invalid').addClass('valid');
        } else {
            $('#number').removeClass('valid').addClass('invalid');
        }

    }).focus(function() {
        $('#pswd_info').show();
    }).blur(function() {
        $('#pswd_info').hide();
    });

});
</script>
  </script>


 @endsection