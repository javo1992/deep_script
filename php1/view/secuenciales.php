<?php include('header.php'); 
//print_r($_SESSION['INICIO']);
?>
<script type="text/javascript">
    $(document).ready(function () {
    
});

</script>
	<script src="../js/secuenciales.js"></script>		
<!-- Begin Page Content -->
<main class="content">
    <div class="container-fluid p-0">    <!-- Page Heading -->
      <h1 class="h3 mb-3"><strong>secuenciales</strong></h1>
    <!-- <button onclick="eliminar_session()"> Cerrar</button> -->
    
    <div class="row">
         <div class="col-lg-12">
            <!-- Basic Card Example -->
            <div class="card shadow mb-8">
                <div class="card-header">
                    <h5 class="card-title">Carga de datos por:</h5>
                </div>
                <div class="card-body" style="padding-top: 0px;">
                	<table class="table table-bordered table-sm table-striped " id="dataTable">
                        <thead>                            
                            <th width="15%">Tipo</th>
                        	<th width="15%">Serie</th>
                        	<th>Autorizacion</th>
                            <th>Numero</th>
                        	<th></th>
                        	<tr>
                        		<td>
                        			<select class="form-select" id="ddl_tipo" name="ddl_tipo">
                        				<option value="FA">Factura</option>
                        				<option value="LC">Liquidacion de compras</option>
                        				<option value="RE">Rerencion</option>
                        				<option value="NC">Nota de credito</option>
                        				<option value="GR">Guia de remision</option>
                        			</select>
                        		</td>
                        		<td>
                        			<div class="row">
                        				<div class="col-sm-5"  style="padding-right:0px">
                        					<input type="" name="estab" id="estab" class="form-control form-control-sm" placeholder="001">
                        				</div>
                        				<div class="col-sm-1" style="padding:0px">
                        					-
                        				</div>
                        				<div class="col-sm-6"  style="padding-left:0px">
                        					<input type="" name="punto" id="punto" class="form-control form-control-sm" placeholder="001">
                        				</div>
                        			</div>
                        		</td>
                        		<td>
                        			<input type="" name="autorizacion" id="autorizacion" class="form-control form-control-sm" value="<?php echo $_SESSION['INICIO']['RUC_EMPRESA']; ?>" readonly >
                        		</td>
                                <td>
                                    <input type="" name="numero" id="numero" class="form-control form-control-sm" value="1">
                                </td>
                        		<td>
                        			<button class="btn btn-primary btn-sm" onclick="editar()"><i class="fa fa-save"></i>Guardar</button>
                        		</td>
                        	</tr>
                        </thead>
                    </table>
                    <table class="table table-hover">
                        <thead>
                            <th>Detalle</th>
                            <th>Autorizacion</th>
                            <th width="15%">Serie</th>
                            <th>Numero</th>
                        </thead>
                        <tbody id="tbl_datos">
                            
                        </tbody>
                    </table>
                </div>
            </div>

        </div>                        
    </div>
</div>
</main>
<?php include('footer.php'); ?>
           