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
 <div id="delete{{$cat3->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert-danger">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel3">NEGAR ACCESO</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
          {!!Form::open(['route'=>['negar.destroy',$cat3->id],'method'=>'DELETE'])!!}
              <label for="">¿Seguro que desea negar el acceso a este empleado?</label>
              <input type="hidden" name="hi" value="">
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
@endforeach()
                  
                   
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
                                            <th> Sexo </th>
                                            <th> Cargo </th>
                                            <th> Acceso </th>
                                        </tr>
                                    </thead>
                                    <tbody class="buscar">

                    <?php $cont=0; ?>
                                    @foreach($emple as $emples)
                                     <?php
                                     
                      
                                        if(($emples->estadoEmp==true)){
                                          
                                              if($emples->id==1 || $emples->login==Auth::user()->login )
                                              {

                                              }
                                            else{
                                              $cont++;
                                      ?>
                        
                                     

                                                    <tr>
                                                        <td><?php echo $cont; ?> </td>
                                                        <td>{{ $emples->nomEmp }}</td>
                                                        <td>{{ $emples->apeEmp }}</td>
                                                        <td>{{ $emples->telEmp }}</td>
                                                        <td>{{ $emples->login }}</td>
                                                        <td>{{ $emples->cargoEmp }}</td>
                                                        
                                               <td><a href="#"   class="btn btn-danger btn-sm" data-id="{{ $emples->id }}" data-toggle="modal" data-target="#delete{{ $emples->id }}">Negar</a>
                                                    

                                                    </tr>
                                
                                                <?php } }
                                            
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