<?php include('header.php');?>

<main class="content">
    <div class="container-fluid p-0">

        <!-- <h1 class="h3 mb-3"><strong>Parametro de articulos</strong></h1> -->

        <div class="row">
            <div class="col-lg-12">
            <!-- Basic Card Example -->
            <div class="card shadow mb-8">
                <div class="card-header py-3">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6> -->
                </div>
                <div class="card-body">
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="pill" href="#nav-marca" role="tab"><i class="fa fa-clone"></i> Marca</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill"  href="#nav-estado" role="tab"> <i class="fa fa-edit"></i>Estado</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill"  href="#nav-genero" role="tab"> <i class="fa fa-clipboard-list"></i> Genero</a>
                  </li>  
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill"  href="#nav-color" role="tab" > <i class="fa fa-palette"></i> Colores</a>
                  </li>              
                </ul>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-marca" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="container-iframe"> 
                          <iframe class="responsive-iframe" src="marcas.php"></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-estado" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="container-iframe"> 
                          <iframe class="responsive-iframe" src="estado.php"></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-genero" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="container-iframe"> 
                          <iframe class="responsive-iframe" src="genero.php"></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-color" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="container-iframe"> 
                          <iframe class="responsive-iframe" src="colores.php"></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <b></b>
                    </div>




                </div>
            </div>

        </div>          
        </div>
    </div>
</main>
<?php include('footer.php'); ?>