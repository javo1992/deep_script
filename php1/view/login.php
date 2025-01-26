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
    <link rel="shortcut icon" href="../img/empresa/logo.png" /> <!-- 48-48px -->

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

    <!-- <title>Sign In | AdminKit Demo</title> -->

    <link href="../css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">


    <script src="../js/jquery-3.6.0.min.js"></script>   
    <script src="../js/app.js"></script>
    <script src="../js/login.js"></script>  
    <script src="../js/sweetalert2.js"></script>

     <script type="text/javascript">
        $(document).ready(function () {
            recordar();
        });
    </script>

</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2" id="empresa_nom" style="display:none">Bienvenido, Cafeteria</h1>
                           <!--  <p class="lead">
                                Sign in to your account to continue
                            </p> -->
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center">
                                        <img src="../img/empresa/apudata.jpeg" alt="Charles Hall" class="img-fluid" width="70%" id="logo_emp" />
                                        <br>
                                    </div> 
                                    <br>                                   
                                     <form class="user">
                                            <p style="color:green;display: none;" id="validar_emp">Empresa validad</p>
                                        <div class="form-group">                                            
                                            <label class="form-label"><b>Ruc de empresa</b></label>
                                            <input type="text" class="form-control form-control-user" id="txt_empresa" placeholder="RUC de empresa" onblur="busca_empresa()">
                                              <input type="text" class="form-control form-control-user" id="txt_id_empresa" style="display:none">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label"><b>Usuario</b></label>
                                            <input type="text" class="form-control form-control-user" id="txt_usuario" placeholder="Usuario">
                                        </div>                                        
                                        <div class="form-group">
                                            <label class="form-label"><b>Password</b></label>
                                            <input type="password" class="form-control form-control-user"
                                                id="txt_password" placeholder="Password">
                                        </div>
                                       <!--  <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div> -->
                                        <br>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-lg btn-primary" onclick="login()">Continuar</button>
                                        </div>                                      
                                        <hr>
                                    </form>
                                     <div class="text-center">
                                        <!-- <a class="small" href="forgot-password.html">Forgot Password?</a> -->
                                    </div>
                                    <div class="text-center">
                                        <!-- <a class="small" href="register.html">Create an Account!</a> -->
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>


</body>

</html>