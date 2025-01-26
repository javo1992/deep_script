<?php   @session_start(); $mesa=0; if(isset($_GET['mesa'])){$mesa=1;}?>
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




    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  -->
    
    <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->

    <!-- <script src="../js/settings.js"></script> -->
   
    <!-- js externos-->    
    <!-- <script src="../vendor/jquery/jquery.min.js"></script> -->
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/sweetalert2.js"></script>    
    <script src="../js/inicio.js"></script>     
    <script src="../js/funciones_globales.js"></script>    
    <script src="../js/select2.min.js"></script>     
    <script src="../js/jquery-ui.js"></script>  
    <script src="../js/informes.js"></script>  



    <!-- css externos-->
    <link href="../css/select2.min.css" rel="stylesheet">
    <link href="../css/jquery-ui.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../css/jquery-ui.css"> -->

   

    <script type="text/javascript">
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

        <div class="main">
           