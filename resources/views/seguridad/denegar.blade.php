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
   
               

               <article class="content static-tables-page">


               @foreach ($emple as $cat3)
 <div id="gridSystemModal3{{$cat3->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert-warning">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel3">ACTIVAR EMPLEADO</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
          {!!Form::model($cat3,['method'=>'PATCH','route'=>['negar.update',$cat3->id]])!!}
              <label for="">¿Seguro que desea cambiar el estado del empleado?</label>
              <input type="hidden" name="hi" value="{{ $cat3->estadoEmp }}">
              <input type="hidden" name="hi2" value="2">
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </div>
          {!!Form::close()!!}
        </div>
      </div>
      
    </div>
  </div>
</div>
@endforeach
              
@foreach ($emple as $cat2)
<div id="gridSystemModal2{{$cat2->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header alert-warning" bgcolor="blue">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel3" >DESACTIVAR EMPLEADO</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
           {!!Form::model($cat2,['method'=>'PATCH','route'=>['negar.update',$cat2->id]])!!}
              <label for="">¿Seguro que desea cambiar el estado del empleado?</label>
              <input type="hidden" name="hi" value="{{ $cat2->estadoEmp }}">
              <input type="hidden" name="hi2" value="3">
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </div>
          {!!Form::close()!!}
        </div>
      </div>
      
    </div>
  </div>
</div>
@endforeach
                  
                   
                    <div class="title-block">
                        <h1 class="title">Seguridad</h1>
                        <p class="title-description"> Negar Acceso </p> 
                         
                           
                    </div>
                      
                    {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
                    {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
                    {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
                    {!!Html::style('assets/css/style.css')!!}  
                    {!!Html::style('assets/css/main-style.css')!!} 

                       <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title">Usuarios</h1>
                             </div>

                            <section class="section">

                                    <di>
                                    <div class="card card-block sameheight-item" >


                                         <form class="form-horizontal" method="post">

                                            
                                      
                                            <h2>
                            Empleados
                        </h3> 
                        <br>
                         <div class="form-group" align="right">
                                                  <span class="col-md-1 col-md-offset-8 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                                               <div class="col-xs-3">

                                                <input id="filtrar" name="name1" type="text"  class="form-control">
                                                </div>
                                                   </div>
                          

                       
                                        
                                             <div class="form-group">
                                               
                                            
                                                <div class="col-md-12" >
                                                     <div class="panel-body"> 
                            <div class="table-responsive">
                             <br>
                                <table class="table  table-bordered table-hover" id="dataTables-example">
                                    <thead >
                                        <tr align="center" class="warning">
                                            <th> # </th>
                                            <th> Nombre </th>
                                            <th> Apellido </th>
                                            <th> Usuario </th>
                                            <th> Telefono </th>
                                            <th> Cargo </th>
                                            <th> Acceso </th>
                                        </tr>
                                    </thead>
                                    <tbody class="buscar">

                    <?php $cont=0; ?>
                                    @foreach($emple as $emples)
                                     <?php
                                     
                      
                                            
                                          
                                              if($emples->id==1 || $emples->login==Auth::user()->login /*|| $emples->estadousurio==false*/ )
                                              {

                                              }
                                            else{
                                              $cont++;
                                      ?>
                        
                                     

                                                    <tr>
                                                        <td>{{ $emples->id }}</td>
                                                        <td>{{ $emples->nomEmp }}</td>
                                                        <td>{{ $emples->apeEmp }}</td>
                                                         <td>{{ $emples->login }}</td>
                                                        <td>{{ $emples->telEmp }}</td>
                                                       
                                                        <td>{{ $emples->cargoEmp }}</td>
                                                        @if($emples->estadousurio==true)
                                                      <td><a href="#"  class="btn btn-danger btn-sm" data-toggle="modal" data-target="#gridSystemModal2{{$emples->id}}">Negar Acceso</a></td>  
                                                        @endif
                                                        @if($emples->estadousurio==false)
                                                      <td><a href="#"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#gridSystemModal3{{$emples->id}}">Dar Acceso</a></td>  
                                                        @endif

                                                            
                                                    

                                                    </tr>
                                
                                                <?php } 
                                            
                                                     ?>

                                                      
                                                      @endforeach  
                                        
                                        
                                    </tbody>
                                                     </table>
                                                            
                                                        
                                                </div>
                                                
                                        </section>

</form>
                               
                                    </div>
                                </div>
                            </div>
                        
                    

                    <br>
                    <br>
                    
                    
                   
                                     
                                    
                                </div>
                            </div>
 
                        </div>
                    </section>
  
@endsection
  @section('scripts')
  
    {!!Html::script('js/buscaresc.js')!!}
  @endsection