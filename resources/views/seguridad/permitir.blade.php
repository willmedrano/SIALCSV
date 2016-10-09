@extends('probandos')

@section('content')
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
   
               

                <article class="content forms-page" >
                  
                   
                    <div class="title-block">
                        <h1 class="title">Seguridad</h1>
                        <p class="title-description"> Permitir Acceso </p> 
                         
                           
                    </div>
                      
                    {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
                    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
                    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
                    {!!Html::style('assets/css/style.css')!!}  
                    {!!Html::style('ssets/css/main-style.css')!!} 

                       <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title">Permitir Acceso</h1>
                             </div>

                            <section class="section">

                                    <di>
                                    <div class="card card-block sameheight-item" >


                                         <form class="form-horizontal" method="post">


                                         <div class="col-md-12" align="center">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h2>
                            Empleados
                        </h3> 
                        <br>
                         <div class="form-group" align="right">
                                                  <span class="col-md-1 col-md-offset-8 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                                               <div class="col-xs-3">

                                                <input id="fname" name="name" type="text"  class="form-control">
                                                </div>
                                                   </div>
                          

                        </div>
                                        <section class="example">
                                             <div class="form-group">
                                               
                                            
                                                <div class="col-md-12" >
                                                     <div class="panel-body"> 
                            <div class="table-responsive">
                             <br>
                                <table class="table  table-bordered table-hover" id="dataTables-example">
                                    <thead >
                                        <tr align="center" class="warning">
                                            <th> Codigo </th>
                                            <th> Nombre </th>
                                            <th> Apellido </th>
                                            <th> Telefono </th>
                                            <th> Correo </th>
                                            <th> Cargo </th>
                                            <th> Acceso </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    @foreach($emple as $emple)
                                                    <tr>
                                                        <td>{{ $emple->id }}</td>
                                                        <td>{{ $emple->nom }}</td>
                                                        <td>{{ $emple->ape }}</td>
                                                        <td>{{ $emple->tel }}</td>
                                                        <td>{{ $emple->sex }}</td>
                                                        <td>{{ $emple->cargo }}</td>
                                                        
                                                <td>{!! link_to_route('log.edit',$title='Permitir',$parameters=$emple->id, $attributes=['class'=>'btn btn-success active']) !!}</td>
                                                    

                                                    </tr>

                                                    
                                                      @endforeach  
                                        
                                        
                                    </tbody>
                                                     </table>
                                                            
                                                        
                                                </div>
                                                </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        
                    

                    <br>
                    <br>
                    
                    
                  {!! Form::model($emple,['route'=>['log.store',$emple->id],'method'=>'PUT', 'class'=>'form-horizontal'])!!}
                                            <div  align="center">

                                                <div>
                                                    <IMG src="assets/faces/3.jpg"  WIDTH=120 HEIGHT=130 ALT="Foto" >
                                                </div>

                                                <div class="col-xs-12" align="center">
                                                    <br>
                                                   

                                                 </div

                                                 >
                                            </div> 
    
                                             
                                            <div class="form-group">

                                                



                                                 

                                                 <span class="col-md-1 col-md-offset-2 text-center"><i>Codigo</i></span>
                            <div class="col-xs-2">

                                <input id="fname" name="name" type="text"  value={{ $emple->id }} class="form-control">
                            </div>

                            
                                                
                                                   </div>
                                                         
                                                      <div class="form-group">
                                                    
                                                    <span class="col-md-1 col-md-offset-2 text-center"><i>Nombre</i></span>
                                                <div class="col-xs-3">

                                                <input id="fname" name="lognom" type="text"  value= {{ $emple->nom }} class="form-control">
                                                </div>
                                                 <div class="col-xs-3">

                                                <input id="fname" name="logape" type="text"  class="form-control">
                                                </div>
                            
                                                
                                                   </div>
                                                      
                                                      <div class="form-group">
                                                     
                                                     <span class="col-md-1 col-md-offset-2 text-center"><i>Telefono</i></span>
                                                <div class="col-xs-3">

                                                <input id="fname" name="logtel" type="text"  class="form-control">
                                                </div>
                                                
                                                      </div>
                                                

                                                 <div class="form-group">
                                                     
                                                     <span class="col-md-1 col-md-offset-2 text-center"><i>Correo</i></span>
                                                <div class="col-xs-3">

                                                <input id="fname" name="name" type="text"  class="form-control">
                                                </div>
                                                 
                                                      </div>

                                                    
                                                   
                                           
                                              <div class="form-group">
                                                  <span class="col-md-1 col-md-offset-2 text-center"><i>Usuario</i></span>
                                               <div class="col-xs-3">

                                                <input id="fname" name="name" type="text"  class="form-control">
                                                </div>
                                                   </div>
                                                         
                                                           
                                                           
                                                           <div class="form-group">
                                                  <span class="col-md-1 col-md-offset-2 text-center"><i>Contraseña</i></span>
                            <div class="col-xs-3">

                                <input id="fname" name="name" type="text"  class="form-control">
                            </div>
                                                    </div>

                                                     <div class="form-group">
                                                <div class="col-md-12 text-center" align="center">
                                                    <button type="submit"  class="btn btn-primary btn-lg">Guardar</button>
                                                </div>                  
                                            </div>

                                                      
                                              {!! Form::close() !!} 
                  
                                     
                                    
                                </div>
                            </div>
 
                        </div>
                    </section>
  
@stop