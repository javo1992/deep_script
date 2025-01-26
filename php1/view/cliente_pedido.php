<?php include('header.php'); 
$tipo = 'FA';
if(isset($_GET['tipo']) && $_GET['tipo']!=''){$tipo = $_GET['tipo'];}
?>
<script type="text/javascript">
$(document).ready(function () {	

    $( "#txt_ci" ).autocomplete({
      source: function( request, response ) {
                
            $.ajax({
                url: '../controlador/clienteC.php?buscar_cliente_x_ci=true',
                type: 'post',
                dataType: "json",
                data: {
                    q: request.term
                },
                success: function( data ) {
                  // console.log(data);
                    response( data );
                }
            });
        },
        select: function (event, ui) {
            $('#txt_ci').val(ui.item.label); // display the selected text
            $('#txt_nombre').val(ui.item.nombre); // save selected id to input
            $('#txt_email').val(ui.item.email); // save selected id to input
            $('#txt_telefono').val(ui.item.telefono); // save selected id to input
            $('#txt_razon').val(ui.item.razon); // save selected id to input
            $('#txt_direccion').val(ui.item.direccion); // save selected id to input
            $('#txt_id').val(ui.item.value); // save selected id to input

            return false;
        },
        focus: function(event, ui){
            $( "#txt_ci" ).val( ui.item.label);
            return false;
        },
    });

     $( "#txt_nombre" ).autocomplete({
      source: function( request, response ) {
                
            $.ajax({
                url: '../controlador/clienteC.php?buscar_cliente_x_ci2=true',
                type: 'post',
                dataType: "json",
                data: {
                    q: request.term
                },
                success: function( data ) {
                  // console.log(data);
                    response( data );
                }
            });
        },
        select: function (event, ui) {
            $('#txt_ci').val(ui.item.ci); // display the selected text
            $('#txt_nombre').val(ui.item.label); // save selected id to input
            $('#txt_email').val(ui.item.email); // save selected id to input
            $('#txt_telefono').val(ui.item.telefono); // save selected id to input
            $('#txt_razon').val(ui.item.razon); // save selected id to input
            $('#txt_direccion').val(ui.item.direccion); // save selected id to input
            $('#txt_id').val(ui.item.value); // save selected id to input

            return false;
        },
        focus: function(event, ui){
        	console.log(ui);
            $( "#txt_nombre" ).val(ui.item.nombre);
            return false;
        },
    });

});

function guardar()
{
	if($('#txt_ci').val()=='')
	{
		Swal.fire('Seleccione un cliente','','info');
		return false;
	}

	if($('#txt_nombre').val()!='' &&  $('#txt_razon').val()=='')
	{
		$('#txt_razon').val($('#txt_nombre').val());
	}

	if($('#txt_nombre').val()=='' || $('#txt_email').val()=='' || $('#txt_razon').val()=='' || $('#txt_direccion').val()=='')
	{
		Swal.fire('Llene todo los campos','','info');
		return false;
	}
	tipo = '<?php echo $tipo; ?>'

	var datos = $('#form_cliente').serialize();
	$.ajax({
	  type: "POST",
	  url: '../controlador/clienteC.php?guardar=true',
	  data: datos, 
	  dataType:'json',
	  success: function(data)
	  {
	  	console.log(data);
	  	if(tipo=='FA')
	  	{
	  	 location.href="detalle_factura.php?id="+data[0].id+"&estado=P";
		}else{
	  	 location.href="detalle_liquidacion.php?id="+data[0].id+"&estado=P";
	  	}
	  }
	})

}

</script>
<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Nueva Factura</strong> </h1>
    <!-- <button onclick="eliminar_session()"> Cerrar</button> -->
    <div class="row">
         <div class="col-lg-12">
            <!-- Basic Card Example -->
            <div class="card shadow mb-8">
                <div class="card-header py-3">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6> -->
                </div>
                <div class="card-body">
                   <div class="row">
                   	  <form id="form_cliente" class="col-sm-9">
	                   	 <div class="col-sm-12">
	                   	 	<div class="row">
	                   	 		<input type="hidden" name="txt_id" id="txt_id">
	                   	 		<input type="hidden" name="txt_tc" id="txt_tc" value="<?php echo $tipo; ?>">
	                   	 		 <div class="col-sm-6">
			                   		<b>CI / RUC</b>
			                   		<input type="text" name="txt_ci" id="txt_ci" class="form-control-sm form-control" onkeyup="num_caracteres('txt_ci',13)" onblur="validar_ci_ruc('txt_ci')" placeholder="Ingrese numero de cedula">
			                   	</div>
			                   	<div class="col-sm-6">
			                   		<b>Nombre</b>
		                   			<input type="" name="txt_nombre" id="txt_nombre" class="form-control-sm form-control">
		                   		</div>
		                   		<div class="col-sm-4">
		                   			<b>Email</b>
		                   			<input type="text" id="txt_email" name="txt_email" class="form-control-sm form-control" onblur ="validador_correo('txt_email')" autocomplete="off">
		                   		</div>
		                   		<div class="col-sm-4">
		                   			<b>Telefono</b>
		                   			<input type="" name="txt_telefono" id="txt_telefono" class="form-control-sm form-control"  onkeyup="num_caracteres('txt_telefono',10)">
		                   		</div>
		                   		<div class="col-sm-4">
		                   			<b>Razon Social</b>
		                   			<input type="" name="txt_razon" id="txt_razon" class="form-control-sm form-control">
		                   		</div>
		                   		<div class="col-sm-12">
		                   			<b>Direccion</b>
		                   			<textarea class="form-control-sm form-control" style="resize:none;" rows="3" name="txt_direccion" id="txt_direccion" ></textarea>
		                   		</div>
	                   	 	</div>
	                   	 </div>
	                   	</form>
	                   	 <div class="col-sm-3">	                   	 	
	                   	 	<button class="btn btn-sm btn-default" style="border: 1px solid;"> Cancelar <img src="../img/sistema/close.png"></button>
	                   	 	<button class="btn btn-sm btn-default" style="border: 1px solid;" onclick="guardar()"> Continuar <img src="../img/sistema/next.png"></button>
	                   	 	
	                   	 </div>	 	                 
                   </div>
                </div>
            </div>

        </div>                        
    </div>
</div>
</main>
<?php include('footer.php'); ?>
           