@extends('probandos')

@section('content')

<div class="sidebar-overlay" id="sidebar-overlay"></div>

                <article class="content forms-page">
                    <div class="title-block">
                        <h3 class="title">
		Inventario
	</h3>
                        <p class="title-description"> Registro de Producto </p>
                    </div>
			<!--<div class="subtitle-block">
                        <h3 class="subtitle">
		Formulario de Producto
	</h3> </div>-->
                    <section class="section">
                        <div class="row sameheight-container">
                            <div >
                                <div class="card card-block sameheight-item" >
                                    <div class="title-block" align="center">
                                        <h3 class="title">
						Formulario de producto
					</h3> </div>
                                    <form role="form" >
                                        <div class="form-group">
                                        	<label class="control-label">Codigo:</label> 
                                        	<input type="text" class="form-control underlined" placeholder="Codigo del producto"> 
                                        </div>

                                        <div class="form-group">
                                        	<label class="control-label">Nombre:</label> 
                                        	<input type="text" class="form-control underlined" placeholder="Nombre del producto"> 
                                        </div>

                                        
                                        <div class="form-group">
                                            <label class="control-label">Marca:</label> 
                                            <input type="text" class="form-control underlined" placeholder="Marca del producto" > 
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Tipo:</label> 
                                            <input type="text" class="form-control underlined" placeholder="Tipo producto" > 
                                        </div>

                                        <div class="form-group">

                                            
                                            
                                                
                                                 
                                                 <div class="col-md-6"> 
                                                 <label class="control-label">Precio:</label> 
                                                 <div class="input-group">

                                                 <span class="input-group-addon">$</span>
                                                 <input type="text" class="form-control"  placeholder="Some text here">
                                                    <span class="input-group-addon">.00</span> </div>
                                                  </div>
                                                 
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Tipo:</label> 
                                            <input type="text" class="form-control underlined" placeholder="Tipo producto" > 
                                        </div>


                                        <div class="form-group"> <label class="control-label">Input Password</label> <input type="password" class="form-control underlined"> </div>
                                        <div class="form-group"> <label class="control-label">Placeholder Input</label> <input type="text" class="form-control underlined" placeholder="Placeholder text"> </div>
                                        <div class="form-group"> <label class="control-label">Disabled Input</label> <input type="text" disabled="disabled" class="form-control underlined" placeholder="Disabled input text"> </div>
                                        <div class="form-group"> <label class="control-label">Static control</label>
                                            <p class="form-control-static underlined">email@example.com</p>
                                        </div>
                                        <div class="form-group"> <label class="control-label">Readonly Input</label> <input type="text" readonly="readonly" class="form-control underlined" value="Readonly input text"> </div>
                                        <div class="form-group"> <label class="control-label">Textarea</label> <textarea rows="3" class="form-control underlined"></textarea> </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </section>



         </article>




@stop