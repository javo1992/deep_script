<?php include('header.php'); ?>
<script type="text/javascript">
    $(document).ready(function () {
      id = '<?php if(isset($_GET['id'])){ echo $_GET['id'];}  ?>';
      if(id!='')
      {
        detalle_proveedor(id);
      }
});

</script>
  <script src="../js/cliente.js"></script>  
<div class="main">
      <main class="content">
        <div class="container-fluid p-0">
          <h1 class="h3 mb-3"><strong>Proveedores</strong></h1>
          <div class="row">
            <div class="col-sm-10">       
              <a class="btn btn-default btn-sm" style="border: 1px solid;" href="proveedores.php"><i class="fa fa-arrow-left"></i> Regresar</a>                    
            </div>
              <div class="col-sm-2 text-end">
              </div>                    
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4 col-xl-3">
              <div class="card mb-3">
                <div class="card-header">
                </div>
                <form method="post" action="#" enctype="multipart/form-data">
                <div class="card-body text-center">
                  <img src="../img/clientes/sin_foto.jpg" id="foto_cliente" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128">
                  <h5 class="card-title mb-0" id="lbl_nombre"></h5>
                  <div>
                    <input type="file" name="file_img" id="file_img" class="form-control form-control-sm">
                    <button class="btn btn-primary btn-sm" id="btn_upload" type="button"> Cargar imagen</button>
                  </div>
                </div>
              </form>
                <!--
                <hr class="my-0">
                <div class="card-body">
                  <h5 class="h6 card-title">Skills</h5>
                  <a href="#" class="badge bg-primary me-1 my-1">HTML</a>
                  <a href="#" class="badge bg-primary me-1 my-1">JavaScript</a>
                  <a href="#" class="badge bg-primary me-1 my-1">Sass</a>
                  <a href="#" class="badge bg-primary me-1 my-1">Angular</a>
                  <a href="#" class="badge bg-primary me-1 my-1">Vue</a>
                  <a href="#" class="badge bg-primary me-1 my-1">React</a>
                  <a href="#" class="badge bg-primary me-1 my-1">Redux</a>
                  <a href="#" class="badge bg-primary me-1 my-1">UI</a>
                  <a href="#" class="badge bg-primary me-1 my-1">UX</a>
                </div>
                <hr class="my-0">
                <div class="card-body">
                  <h5 class="h6 card-title">About</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home feather-sm me-1"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Lives in <a href="#">San Francisco, SA</a>
                    </li>

                    <li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase feather-sm me-1"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg> Works at <a href="#">GitHub</a></li>
                    <li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin feather-sm me-1"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> From <a href="#">Boston</a></li>
                  </ul>
                </div>
                <hr class="my-0">
                <div class="card-body">
                  <h5 class="h6 card-title">Elsewhere</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1"><span class="fas fa-globe fa-fw me-1"></span> <a href="#">staciehall.co</a></li>
                    <li class="mb-1"><span class="fab fa-twitter fa-fw me-1"></span> <a href="#">Twitter</a></li>
                    <li class="mb-1"><span class="fab fa-facebook fa-fw me-1"></span> <a href="#">Facebook</a></li>
                    <li class="mb-1"><span class="fab fa-instagram fa-fw me-1"></span> <a href="#">Instagram</a></li>
                    <li class="mb-1"><span class="fab fa-linkedin fa-fw me-1"></span> <a href="#">LinkedIn</a></li>
                  </ul>
                </div> -->
              </div>
            </div>

            <div class="col-md-8 col-xl-9">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title mb-0">Datos personales</h5>
                </div>
                <div class="card-body h-100">
                  <form id="form_datos">
                  <div class="row">
                    <input type="hidden" name="txt_id" id="txt_id">
                    <input type="hidden" name="txt_tipo" id="txt_tipo" value="P">
                     <div class="col-sm-4">
                      <b>CI / RUC</b>
                      <input type="text" name="txt_ci" id="txt_ci" class="form-control-sm form-control" onkeyup="num_caracteres('txt_ci',13)" onblur="validar_ci_ruc('txt_ci')" placeholder="Ingrese numero de cedula">
                    </div>
                    <div class="col-sm-8">
                      <b>Nombre</b>
                      <input type="" name="txt_nombre" id="txt_nombre" class="form-control-sm form-control">
                    </div>
                    <div class="col-sm-4">
                      <b>Email</b>
                      <input type="text" id="txt_email" name="txt_email" class="form-control-sm form-control" onblur ="validador_correo('txt_email')" autocomplete="off">
                    </div>
                    <div class="col-sm-3">
                      <b>Telefono</b>
                      <input type="" name="txt_telefono" id="txt_telefono" class="form-control-sm form-control"  onkeyup="num_caracteres('txt_telefono',10)">
                    </div>
                    <div class="col-sm-5">
                      <b>Razon Social</b>
                      <input type="" name="txt_razon" id="txt_razon" class="form-control-sm form-control">
                    </div>
                    <div class="col-sm-12">
                      <b>Direccion</b>
                      <textarea class="form-control-sm form-control" style="resize:none;" rows="3" name="txt_direccion" id="txt_direccion" ></textarea>
                    </div>
                  </div>
                  </form>
                  <div class="modal-footer">
                    <button class="btn btn-danger" style="display: none;" id="btn_inactivar" type="button" onclick="cambiar_estado('I')">Inactivar</button>
                    <button class="btn btn-success" style="display: none;" id="btn_activar" type="button" onclick="cambiar_estado('A')">Activar</button>
                    <button class="btn btn-primary" type="button" onclick="guardar_editar();">Guardar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </main>
<?php include('footer.php'); ?>