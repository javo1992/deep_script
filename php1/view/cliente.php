<?php include('header.php'); ?>
<script type="text/javascript">
    $(document).ready(function () {
    	lista_cliente();
});

</script>
	<script src="../js/cliente.js"></script>		
<!-- Begin Page Content -->
<main class="content">
    <div class="container-fluid p-0">    <!-- Page Heading -->
      <h1 class="h3 mb-3"><strong>Clientes</strong></h1>
      <div class="row">
        <div class="col-sm-2">
            <a class="btn btn-success btn-sm" href="detalle_cliente.php"><i class="fa fa-plus"></i> Nuevo</a>
        </div>
        <div class="col-sm-10 text-end">
            <button class="btn btn-primary btn-sm" id="btnExportar"><i class="fa fa-file-excel"></i> Exportar Clientes</a>
        </div>
      </div>

      <br>
    <!-- <button onclick="eliminar_session()"> Cerrar</button> -->
    <div class="row">
    	<div class="col-sm-4">
    		<input type="text" name="query" id="query" class="form-control form-control-sm" onkeyup="lista_cliente()" placeholder="Nombre / CI / RUC">
    	</div>
    </div>
    <br>
    <div class="row" id="lista_clientes">
    	    	
    </div>
    
</div>
</main>
<?php include('footer.php'); ?>
           