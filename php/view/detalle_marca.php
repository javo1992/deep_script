<?php include('./header2.php'); $id = ''; if(isset($_GET['id'])){$id=$_GET['id'];} ?>
<script type="text/javascript">
$( document ).ready(function() {
	var id = '<?php echo $id; ?>';
  if(id!='')
  {
	  datos_col(id);
  }

});

function datos_col(id)
  { 
    $('#titulo').text('Editar marca');
    $('#op').text('Editar');
    var marcas='';

    $.ajax({
      data:  {id:id},
      url:   '../controlador/marcasC.php?lista=true',
      type:  'post',
      dataType: 'json',
      /*beforeSend: function () {   
           var spiner = '<div class="text-center"><img src="../../img/gif/proce.gif" width="100" height="100"></div>'     
         $('#tabla_').html(spiner);
      },*/
        success:  function (response) {
          console.log(response);
           $('#codigo').val(response[0].CODIGO); 
           $('#descripcion').val(response[0].DESCRIPCION);
           $('#id').val(response[0].ID_MARCA); 
      }
    });
  }
  function editar_insertar()
  {
     var codigo = $('#codigo').val();
     var descri = $('#descripcion').val();
     var id = $('#id').val();
    
      var parametros = {
        'cod':codigo,
        'des':descri,
        'id':id,
      }
      if(id=='')
        {
          if(codigo == '' || descri == '')
            {
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Asegurese de llenar todo los campos',
               })
            }else
            {
             insertar(parametros)
          }
        }else
        {
           if(codigo == '' || descri == '')
            {
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Asegurese de llenar todo los campos',
               })
            }else
            {
              insertar(parametros);
            }
        }
  }

   function insertar(parametros)
  {
     $.ajax({
      data:  {parametros:parametros},
      url:   '../controlador/marcasC.php?insertar=true',
      type:  'post',
      dataType: 'json',
      /*beforeSend: function () {   
           var spiner = '<div class="text-center"><img src="../../img/gif/proce.gif" width="100" height="100"></div>'     
         $('#tabla_').html(spiner);
      },*/
        success:  function (response) {  
        if(response == 1)
        {
          Swal.fire('','Operaciopn realizada con exito.','success').then(function(){          
          location.href = 'marcas.php';
         });
        }else if(response==-2)
        {
          Swal.fire('','codigo ya regitrado','info');
        }  
               
      }
    });

  }

   function delete_datos()
  {
    var id = '<?php echo $id; ?>';
    Swal.fire({
  title: 'Eliminar Registro?',
  text: "Esta seguro de eliminar este registro?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si'
}).then((result) => {
  if (result.value) {
    eliminar(id);    
  }
})

  }

 function eliminar(id)
  {
     $.ajax({
      data:  {id:id},
      url:   '../controlador/marcasC.php?eliminar=true',
      type:  'post',
      dataType: 'json',     
        success:  function (response) {  
        if(response == 1)
        {
         Swal.fire('Eliminado!','Registro Eliminado.','success').then(function(){          
          location.href = 'marcas.php';
         });
        }  
               
      }
    });

  }
</script>
<div class="content">
    
      <div class="container-fluid">
      	<div class="row">
      		<div class="col-sm-12">
      			<a href="marcas.php" class="btn btn-default btn-sm"><i class="fa fa-arrow-circle-left"></i> Regresar</a>
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-sm-6">
      			<input type="hidden" name="id" id="id" class="form-control" hidden="">
      			 Codigo de marca <br>
      			 <input type="input" name="codigo" id="codigo" class="form-control">  
      			 Descripcion de marca<br>
      			 <input type="input" name="descripcion" id="descripcion" class="form-control">   
      			  			
      		</div>
      		<div class="col-sm-6">
      			

      		</div>
      	</div>
      	<br>
      </div>
      <div class="modal-footer">
      		<button class="btn btn-primary" onclick="editar_insertar()" type="button"><i class="fa fa-save"></i> Guardar</button>
      		<button class="btn btn-danger" onclick="delete_datos()" type="button"><i class="fa fa-trash"></i> Eliminar</button>
      		
      	</div>
    <!-- /.content -->
  </div>

