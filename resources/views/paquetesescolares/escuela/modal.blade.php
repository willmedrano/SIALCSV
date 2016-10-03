	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
        <h4 class="modal-title" id="myModalLabel">Modificar datos de la Escuelas</h4>
      </div>
      <div class="modal-body">
      
      	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
      	<input type="hidden" id="idescuela">
      <div class="container-fluid bd-example-row form-horizontal">
 
         
                 
                           <table class="quitarborder" style="width:100%" >
      
          
           <thead>
               <tr>
                   <th></th>
                   <th ></th>
                    <th ></th>
                    <th ></th>
                    <th ></th>
                   <th colspan="2"></th>
                   
               </tr>
           </thead>
           <tbody>
               
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Escuela: </label></span></td>
                    <td colspan="2" align="center" >  <input id="nomesc" name="nomesc" type="text"  class="form-control">  
                                                    <br></td>
                    <td colspan="2" rowspan="3" align="center"><span align="center">
                        <i style="font-size: 150px;" class="fa fa-pencil-square-o fa-3x fa-fw bigicon" align="center"></i>
                    </span></td>
                    <td></td>
                    <td></td>
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Director: </label></span></td>
                    <td colspan="2" align="center"><input id="nomdirec" name="nomdirec" type="text"  class="form-control" > <br></td>
                    <td></td>
                    <td></td>
                    <td></td>
                     </tr>
             
                <tr>
                   <td align="right" nowrap="nowrap"> <span class="text-center" ><label >Telefono: </label></span></td>
                    <td colspan="2">  <input id="telesc" name="telesc" type="text"  class="form-control" > <br>
                    </td>
                    <td></td>
                    <td></td>
                    
                    
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"> <span class="text-center" ><label >Dirección: </label></span></td>
                    <td colspan="3"><textarea class="form-control" id="diresc" name="diresc"  rows="2" ></textarea></td>
                    <td></td>
                    <td></td>
                    
                    
               </tr>
           </tbody>
       </table>
                    
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      {!!link_to('#', $title='Actualizar', $attributes = ['id'=>'actualizar', 'class'=>'btn btn-primary'], $secure = null)!!}
      </div>
    </div>
  </div>
</div>