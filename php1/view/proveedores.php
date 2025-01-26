<?php include('header.php'); ?>
<script type="text/javascript">
    $(document).ready(function () {
    	lista_proveedores();
});

</script>
	<script src="../js/cliente.js"></script>		
<!-- Begin Page Content -->
<main class="content">
    <div class="container-fluid p-0">    <!-- Page Heading -->
      <h1 class="h3 mb-3"><strong>Proveedores</strong></h1>
      <div class="row">
        <div class="col-sm-2">
            <a class="btn btn-success btn-sm" href="detalle_proveedor.php"><i class="fa fa-plus"></i> Nuevo</a>
        </div>
      </div>
      <br>
    <!-- <button onclick="eliminar_session()"> Cerrar</button> -->
    <div class="row">
    	<div class="col-sm-4">
    		<input type="text" name="query" id="query" class="form-control form-control-sm" onkeyup="lista_proveedores()" placeholder="Nombre / CI / RUC">
    	</div>
    </div>
    <br>
    <div class="row" id="lista_proveedores">
    	    	
    </div>
    
</div>
</main>
<?php include('footer.php'); ?>
           