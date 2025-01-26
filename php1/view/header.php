<?php   @session_start(); if(!isset($_SESSION['INICIO']['ID_EMPRESA'])){ header('Location: ../../index.php'); }?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>AdminKit Demo - Bootstrap 5 Admin Template</title>

    <link href="../css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <script src="../js/settings.js"></script>
   
    <!-- js externos-->
    <script src="../js/jquery-3.5.1.min.js"></script>  <!-- funciona selec2 bien -->
    <script src="../js/sweetalert2.js"></script>    
    <script src="../js/inicio.js"></script>     
    <script src="../js/funciones_globales.js"></script>    
    <script src="../js/select2.min.js"></script>       
    <script src="../js/jquery-ui.js"></script>   
    <script src="../js/informes.js"></script>  



    <!-- css externos-->
    <link rel="stylesheet" href="../css/email.css" type="text/css">
    <!-- <link rel="stylesheet" href="../css/multiple_email.css" type="text/css"> -->
    <link href="../css/select2.min.css" rel="stylesheet">
    <link href="../css/jquery-ui.min.css" rel="stylesheet">

    <style type="text/css">
    .responsive-iframe {
            position: initial;
           top: 0;
           width: 100%;
           height: 500px;
       }
    </style>

   

    <script type="text/javascript">
        var em = '<?php echo $_SESSION['INICIO']['ID_EMPRESA']?>';
        var us = '<?php echo $_SESSION['INICIO']['ID_USUARIO']?>';
        menu_lateral();
        $(document).ready(function () {
                validar_session();
        });
                    
    function validar_session() 
    {
        const id_empresa = "<?php echo isset($_SESSION['INICIO']['ID_EMPRESA']); ?>";
        const empresa = '<?php echo isset($_SESSION["INICIO"]["EMPRESA"]);?>';
        const usuario = '<?php echo isset($_SESSION["INICIO"]["USUARIO"]); ?>';
        const id_usuario = '<?php echo isset($_SESSION["INICIO"]["ID_USUARIO"]); ?>';   
        if(empresa==null || id_usuario==null || empresa=='' || id_usuario=='')
        {
            window.location.href = 'login.php';
        }
    }

    function eliminar_session()
    {
        $.ajax({
            // data:  {parametros:parametros},
            url:   '../controlador/funcionesSistema.php?cerrar_session=true',           
            type:  'post',
            dataType: 'json',
            success:  function (response) { 
               if(response==1)
               {
                 window.location.href='login.php';
               }
            }
          });

    }


    </script>


</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
          <span class="align-middle">
              <img src="../img/sistema/logo.png" style="width:80%">
          </span>
        </a>

                <ul class="sidebar-nav" id="accordionSidebar">
                    <li class="sidebar-header">
                        Paginas
                    </li>
                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="home.php">
                            <i class="align-middle" data-feather="home"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a data-bs-target="#empresa" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="database"></i> <span class="align-middle">Empresa</span>
                        </a>
                        <ul id="empresa" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="empresa.php">Datos de Empresa</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link"  href="usuarios.php">Usuario</a>
                            </li>
                        </ul>
                    </li>

                     <li class="sidebar-item">
                        <a data-bs-target="#articulos" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="box"></i> <span class="align-middle">Articulos</span>
                        </a>
                        <ul id="articulos" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="lista_articulos.php">Lista de Articulos</a>
                            </li>
                           <!--  <li class="sidebar-item">
                                <a class="sidebar-link"  href="usuarios.php">Usuario</a>
                            </li> -->
                        </ul>
                    </li>
                     <li class="sidebar-item">
                        <a data-bs-target="#punto_venta" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Punto de ventas</span>
                        </a>
                        <ul id="punto_venta" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="cocina.php">Cocina</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="envios.php">Envios</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="rutas.php">Rutas</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link"  href="usuarios.php">Usuario</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link"  href="usuarios.php">Usuario</a>
                            </li>
                        </ul>
                    </li>





                </ul>                
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                               <!--  <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">4</span>
                                </div> -->
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-feather="home"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.8</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New connection</div>
                                                <div class="text-muted small mt-1">Christina accepted your request.</div>
                                                <div class="text-muted small mt-1">14h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                       
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="../img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark"><?php echo $_SESSION['INICIO']['USUARIO'];?></span>
              </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Perfil</a>
                                <!-- <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a> -->
                                <div class="dropdown-divider"></div>
                                <!-- <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a> -->

                                <!-- <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a> -->
                                <!-- <div class="dropdown-divider"></div> -->
                                <!-- <a class="dropdown-item" href="#">Log out</a> -->
                                <button type="button" class="dropdown-item" onclick="eliminar_session()">
                                    <i class="align-middle me-1" data-feather="log-out"></i>
                                   Salir
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            