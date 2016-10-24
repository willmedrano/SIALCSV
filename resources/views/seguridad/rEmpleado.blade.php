@extends('probandos')


@section('content')

<style type="text/css" >
    


.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
.legend{
    color: #36A0FF;
}

  .thumb{
     height: 300px;
     border: 1px solid #000;
     margin: 10px 5px 0 0;
}  
</style>
   
               

                <article class="content forms-page" >
                  
                   
                    <div class="title-block">
                        <h1 class="title">Empledados</h1>
                        <p class="title-description"> Registro de Empleados </p> 
                         
                           
                    </div>
                      
                    {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
                    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
                    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
                    {!!Html::style('assets/css/style.css')!!}  
                    {!!Html::style('ssets/css/main-style.css')!!} 
{!!Html::script('js/jquery-1.9.0.min.js')!!}
                       <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title">Registro de empleado</h1>
                             </div>

                            <section class="section">
                    
                                <div>
                                    <div class="card card-block sameheight-item" >
                                    
                                     

                                        <div class="form-horizontal">
                                      
                    
{!! Form::open(array('route'=>'log.store', 'method' => 'post','files'=>true) )!!}

                                            <br>
                                            <div class="form-group">
                                            <div class="form-group col-xs-12" align="center" >
                                            <img src="assets/faces/3.jpg"  alt="Foto"  style="width:160px;height:160px;" id="fotografia_usuario" >
                                            <output id="list"></output>
                                            <br>
                                            <input type="file" id="f" name="f" style="visibility:hidden;" />

                                            <input type="file" id="files" name="files" required/>
                                            </div>
                                           </div>
                                            <br>
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-user bigicon"></i>
                                                </span>

                                                <div class="col-xs-4">
                                                    <input id="fname" name="nombreE" type="text"  placeholder="Ingrese nombres" class="form-control">
                                                </div>

                                                <div class="col-xs-4" align="left">
                                                    <input id="fname" name="apeEmp" type="text" placeholder="Ingrese apellidos" class="form-control">
                                                </div>
                                            </div>
                                            <br>
                  
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                 <i class="fa fa-credit-card bigicon"></i>
                                                </span>

                                                <div class="col-xs-4">
                                                    <input id="lname" name="dui" type="text" placeholder="Dui" class="form-control">
                                                </div>

                                                <div class="col-xs-4" align="left">
                                                    <input id="fname" name="nit" type="text" placeholder="NIT" class="form-control">
                                                </div>

                                            </div>
                                            <br>             
    
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-calendar bigicon"></i>
                                                </span>

                                                <div class="col-xs-4">
                                                    <input id="nac" name="Fnac" type="date" placeholder="Fecha de Nacimiento " class="form-control" data-toggle="tooltip" title="Fecha de nacimiento">
                                                 </div>

                                            </div>
                                            <br>  

                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-phone-square bigicon"></i>
                                                </span>

                                                <div class="col-xs-4">
                                                    <input id="phone" name="tel1" type="text" placeholder="Telefono 1" class="form-control">
                                                </div>

                                                 <div class="col-xs-4" align="left">
                                                    <input id="phone" name="tel2" type="text" placeholder="Telefono 2" class="form-control">
                                                </div>

                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-users bigicon icon_nav"></i>
                                                </span>
                                                <div class="col-xs-4"> 
                                                    <select class="form-control" name="sexo">
                                                        <option>Seleccione una opcion</option>
                                                        <option>Masculino</option>
                                                        <option>Femenino</option>   
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                      
                                            <div class="form-group">
                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-pencil-square-o bigicon"></i>
                                                </span>
                                                <div class="col-md-8">
                                                     <textarea class="form-control" id="message" name="dir" placeholder="Direccion" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-suitcase bigicon"></i>
                                                </span>
                                                <div class="col-xs-4 "> 
                                                    <select class=" form-control" name="puesto">
                                                        <option>Administrador</option>
                                                        <option>Vendedor</option>
                                                        <option>Otros</option>   
                                                    </select>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-dollar bigicon icon_nav" ></i>
                                                </span>
                                                <div class="col-xs-4">
                                                    <input id="fname" name="salario" type="text" placeholder="Salario" class="form-control">
                                                </div>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <div class="col-md-12 text-center" align="center">
                                                    <button type="submit"  class="btn btn-primary btn-lg">Guardar</button>
                                                </div>                  
                                            </div>
                                            </div>
                                                
                                            </div>
                  
                                     {!! Form::close() !!}
                                </div>
                            </div>
 
                        </div>
                    </section>
  
@stop

@section('scripts')
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

function archivo(evt) {

      var files = evt.target.files; // FileList object
        
        //Obtenemos la imagen del campo "file". 
      for (var i = 0, f; f = files[i]; i++) {         
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }
       
           var reader = new FileReader();
           
           reader.onload = (function(theFile) {
               return function(e) {
             document.getElementById("fotografia_usuario").style.display='none';
               // Creamos la imagen.
                      document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '" style="width:160px;height:160px;"/>'].join('');
               };
           })(f);
 
           reader.readAsDataURL(f);
       }
}
             
      document.getElementById('files').addEventListener('change', archivo, false);

</script>
{!! Html::script('js/script3.js') !!}

 @endsection

