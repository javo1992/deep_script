<?php include('header.php'); $id='';  ?>
<script src="../js/lista_articulos.js"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        var id = '<?php if(isset($_GET['id'])){ echo $_GET['id']; $id= $_GET['id']; };?>';
        lista_articulos_adicionales();
        categorias();
        if(id!='')
        {
        	detalle_articulo(id);
        	tamanio_lista(id);
        	adicionales_lista(id);
        	materia_prima(id);
        }
     });
</script>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Detalle de articulo</strong></h1>
        <div class="row">
        	<div class="col-sm-2">
        		<a href="lista_articulos.php" class="btn btn-sm btn-default" style="border:1px solid;"><i class="fa fa-arrow-left"></i> Regresar</a>
        	</div>
        </div>
        <br>

        <div class="row">
            <div class="col-lg-12">
            	<ul class="nav nav-pills">
				  <li class="nav-item">
				    <a class="nav-link active" data-bs-toggle="pill" href="#home">Detalle de producto</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" data-bs-toggle="pill"  href="#menu1">KIT / Recetas</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" data-bs-toggle="pill"  href="#menu2">Adicionales</a>
				  </li>				 
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
				  <div class="tab-pane container active" id="home">
					  	<div class="row">
					         <div class="col-lg-12">
					            <!-- Basic Card Example -->
					            <div class="card shadow mb-8">            	
					                <div class="card-header py-3">
					                <div class="row">
					                	<div class="col-sm-9">
					                		<!-- <button class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Guardar</button> -->
					                	</div>
					                	<div class="col-sm-3 text-right">
					                		<button class="btn btn-primary btn-sm" onclick="add_edit()"><i class="fa fa-save"></i> Guardar</button>
					                		<?php if($id!=''){echo '<button class="btn btn-danger btn-sm" onclick="eliminar()"><i class="fa fa-trash"></i> Eliminar</button>' ;} ?>
					                		
					                	</div>                	
					                </div>                	
					                    <!-- <h6 class="m-0 font-weight-bold text-primary" id="lbl_nombre">Name Basic Example</h6> -->
					                </div>
					                <div class="card-body">
					                   <div class="row">
					                   	<div class="col-sm-4">
					                   		 <form enctype="multipart/form-data" id="form_img" method="post" class="col-sm-12">
					                   		 	<input type="hidden" name="txt_id" id="txt_id">
						                   		<img src="../img/sistema/sin_imagen.jpg" style="border:1px solid; width: inherit;" id="img_articulo">
						                   		<br><br>
						                   		<input type="file" name="file_img" id="file_img" class="form-control form-control-sm">
						                   		<input type="hidden" name="txt_nom_img" id="txt_nom_img">
						                   		<button class="btn btn-primary btn-block" id="subir_imagen" type="button">Cargar imagen</button>
					                   		</form>                   		
					                   	</div>
					                   	<div class="col-sm-8">              
								                     <div class="row">
								                     	<div class="col-sm-8">
								                     		<b><code>*</code>Descripcion</b><br>
								                     		<input type="text" class="form-control form-control-sm" name="" id="txt_description">
								                     	</div>			                     	
								                     	<div class="col-sm-4">
								                     		<b>Tipo</b><br>
								                      		<label  class="form-control-sm"><input type="radio" name="opcT" id="opcp" value="P" checked> Producto</label>
								                      		<label  class="form-control-sm"><input type="radio" name="opcT" id="opcs" value="S"> Servicio</label>
								                     			                     		
								                     	</div>
								                     </div>
								                     <div class="row">
								                     	<div class="col-sm-8">
								                     		<b>Descripcion 2</b><br>
								                     		<input type="text" class="form-control form-control-sm" name="" id="txt_description2">	
								                     	</div>
								                     	<div class="col-sm-4">
								                           <b>Codigo Barras </b><br>
								                           <input type="text" class="form-control form-control-sm" name="" id="txt_barras">
								                         </div> 
								                     	
								                     </div>
								                     <div class="row">
								                         <div class="col-sm-4">
								                           <b><code>*</code>Referencia </b><br>
								                           <input type="text" class="form-control form-control-sm" name="" id="txt_asset">
								                         </div>
								                         <div class="col-sm-4">
								                             <b>Tag RFID </b><br>
								                             <input type="text" class="form-control form-control-sm" name="" id="txt_rfid">
								                           </div>
								                           <div class="col-sm-4">
								                             <b>Codigo Auxiliar </b><br>
								                             <input type="text" class="form-control form-control-sm" name="" id="txt_tag_anti">
								                           </div>                       
								                     </div>
								                     <div class="row">
								                      <div class="col-sm-3">
								                           <b>Cantidad </b><br>
								                           <input type="text" class="form-control form-control-sm" name="" id="txt_cant">
								                         </div>
								                         <div class="col-sm-3">
								                     		<b>Peso</b><br>
								                     		<input type="text" class="form-control form-control-sm" name="" id="txt_peso" value="0">                   		
								                     	</div>  
								                         <div class="col-sm-3">
								                         <b>Unidad medida  </b><br>
								                         <input type="text" class="form-control form-control-sm" name="" id="txt_unidad">
								                         </div>
								                          <div class="col-sm-3">
								                           <b><code>*</code>Valor actual </b><br>
								                           <input type="text" class="form-control form-control-sm" name="" id="txt_valor">
								                         </div>	               
								                     </div>
								                     <div class="row">
								                     	<div class="col-sm-2">
								                           <b>Minimo </b><br>
								                           <input type="text" class="form-control form-control-sm" name="" id="txt_min" value="0">
								                         </div>  
								                         <div class="col-sm-2">
								                           <b>Maximo </b><br>
								                           <input type="text" class="form-control form-control-sm" name="" id="txt_max" value="0">
								                         </div>  
								                          <div class="col-sm-5">
								                            <b><code>*</code>Categoria</b><br>
										                   		<div class="input-group">
										                            <select class="form-select" id="ddl_categoria" style="width:85%">
										                              <option>Seleccione Categoria</option>
										                            </select>
										                            <button class="btn btn-secondary btn-sm" type="button" title="Nuevo Articulos" onclick="$('#nueva_categoria').modal('show');"><i class="fa fa-plus"></i></button>
										                        </div>
								                          </div>
								                          <div class="col-sm-3">
								                           <b>Lleva iva </b><br>
								                           <label class="form-control-sm"><input type="radio" name="opc" id="opcsi" value="si"> Si</label>
								                           <label class="form-control-sm"><input type="radio" name="opc" id="opcno" value="no" checked> No</label>
								                        </div>  
								                          

								                     </div>
								                     
								                     <div class="row">
								                     	<div class="col-sm-6">
								                              <b><code>*</code>Localizacion</b><br>
								                            <select class="form-select form-control-sm" id="ddl_localizacion">
								                              <option value="">Seleccione Custodio</option>
								                            </select>
								                          </div>    
								                         <div class="col-sm-3">
								                         <b>Modelo </b><br>
								                         <input type="text" class="form-control form-control-sm" name="" id="txt_modelo">
								                         </div>
								                          <div class="col-sm-3">
								                         <b>Serie </b><br>
								                         <input type="text" class="form-control form-control-sm" name="" id="txt_serie">
								                         </div>         
								                     </div>
								                     <div class="row">
								                     	 <div class="col-sm-4">
								                           <b>Fecha de Ingreso </b><br>
								                           <input type="date" class="form-control form-control-sm" name="" id="txt_fecha" readonly>
								                         </div>  
								                         <div class="col-sm-4">
								                     		<b>Controlar inventario</b><br>
								                      		<label  class="form-control-sm"><input type="radio" name="opcInv" id="opcInv1" value="1"> Si</label>
								                      		<label  class="form-control-sm"><input type="radio" name="opcInv" id="opcInv0" value="0" checked> No</label>
								                     			                     		
								                     	</div>

								                         <div class="col-sm-4">
								                             <b>Marca</b><br>
								                             <select class="form-select form-control-sm" id="ddl_marca">
								                               <option value="">Selecciones</option>
								                             </select>
								                         </div>
								                          <div class="col-sm-4">
								                           <b>Genero</b> <br>
								                           <select class="form-select form-control-sm" id="ddl_genero">
								                             <option value="">Selecciones</option>
								                           </select>
								                         </div>  
								                         <div class="col-sm-3">
								                            <b>Estado</b> <br>
								                            <select class="form-control-sm form-select" id="ddl_estado">
								                              <option>Selecciones</option>
								                            </select value="">
								                         </div>
								                        
								                         <div class="col-sm-4">
								                            <b>Color </b><br>
								                            <select class="form-select form-control-sm" id="ddl_color">
								                              <option value="">seleccione</option>
								                            </select>
								                         </div>  
								                     </div>
								                     <div class="row">
								                      <div class="col-sm-12">
								                         <b>Caracteristica </b><br>
								                         <input type="text" class="form-control form-control-sm" name="" id="txt_carac">
								                         </div>                                                     
								                     </div>	

								            </div>                 	
					                   </div>
					                </div>
					            </div>

					        </div>                        
					  </div>
					  </div>		
				

				 <div class="tab-pane container fade card" id="menu1">
					  	<!-- <div class="card"> -->
					  	<!-- 	<div class="row">
					  			<div class="col-sm-6">
					  				<div class="row">
					  					<div class="col-sm-4">
					  						<b>Tamaño</b>
					  						<input type="hidden" name="txt_id_tama" id="txt_id_tama">
					  						<input class="form-control form-control-sm" name="txt_tama" id="txt_tama">
					  					</div>

					  					<div class="col-sm-4">
					  						<b>Precio</b>
					  						<input class="form-control form-control-sm" name="txt_precio_ta" id="txt_precio_ta">
					  					</div>
					  					<div class="col-sm-4">
					  						<br>
					  						<button class="btn btn-sm btn-primary" onclick="tamanio_add()"><i class="fa fa-plus"></i> Agregar</button>
					  					</div>		  					
					  				</div>

					  			</div>
					  			<div class="col-sm-6">
					  				<table class="table table-hover">
					  					<thead>
					  						<th>Tamaño</th>
					  						<th>Precio</th>
					  						<th></th>
					  					</thead>
					  					<tbody id="tbl_tama">
					  						<tr>
					  							<td colspan="3">No se encontraron tamaños</td>
					  						</tr>
					  					</tbody>
					  				</table>
					  			</div>
					  		</div> -->
					  		<h1 class="h3 mb-4 text-gray-800" id="">Materia prima</h1>
					  		<div class="row">
					  			<div class="col-sm-7">
					  				<div class="row">
					  					<div class="col-sm-7">
							  				<b>Materia prima</b>
							  				<select class="form-select form-control-sm" id="ddl_materia" name="ddl_materia" onchange="">
							  					<option value="">Seleccione materia prima</option>
							  				</select>					  				
							  			</div>
							  			<div class="col-sm-4">

							  				<div class="row">
							  					<div class="col-sm-6">
								                      <b>cantidad</b>
									  				<input type="" name="txt_cant_materia" id="txt_cant_materia" class="form-control form-control-sm" value="0">
									  			</div>
									  			<div class="col-sm-6">								                  
								                      <b>Peso(kg)</b>
									  				<input type="" name="txt_peso_materia" id="txt_peso_materia" class="form-control form-control-sm" value="0">
									  			</div>								  					
							  				</div>
							  				
							  			</div>
							  			
							  			<div class="col-sm-1"><br>
							  				<button class="btn btn-primary btn-sm" onclick="materia_prima_add()"><i class="fa fa-save"></i></button>
							  			</div>					  					
					  				</div>
					  			</div>
					  			<div class="col-sm-5">
					  				<div class="row">
					  					<table class="table table-hover">
					  						<thead>
					  							<th>Materia prima</th>
					  							<th>Canti</th>
					  							<th>Peso(Kg)</th>
					  							<th></th>
					  						</thead>
					  						<tbody id="tbl_materia">
					  							<tr>
					  								<td></td>
					  								<td></td>
					  								<td></td>
					  								<td></td>
					  							</tr>
					  						</tbody>					  						
					  					</table>
					  					
					  				</div>
					  			</div>

					  		</div>
					  	<!-- </div> -->
					  </div>
					   <div class="tab-pane container fade" id="menu2">
		 	 <div class="row">
		  			<div class="col-sm-8">
		  				<div class="row">
		  					<div class="col-sm-8">
		  						Producto Adicional
		  						<select class="form-select" id="ddl_producto_add" name="ddl_producto_add">
		  							<option>Seleccione producto</option>
		  						</select>
		  					</div>
		  					<div class="col-sm-4">
		  						<br>
		  						<button class="btn btn-sm btn-primary" onclick="adicionales_add()"><i class="fa fa-plus"></i> Agregar</button>
		  					</div>		  					
		  				</div>
		  			</div>
		  			<div class="col-sm-4">
		  				<table class="table table-hover">
		  					<thead>
		  						<th>Producto</th>
		  						<th></th>
		  					</thead>
		  					<tbody id="tbl_adicional">
		  						<tr>
		  							<td colspan="3">No se encontraron adicionales</td>
		  						</tr>
		  					</tbody>
		  				</table>
		  			</div>
		  		</div>
		  </div>

				</div>
			</div>
		</div>
    </div>
</main>

<div class="modal fade" id="nueva_categoria"  data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nueva categoria</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body m-3">
            	<b>Nombre de categoria</b>
            	<input type="" name="txt_new_cate" id="txt_new_cate" class="form-control-sm form-control">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="add_categoria()">Guardar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>



<?php include('footer.php'); ?>