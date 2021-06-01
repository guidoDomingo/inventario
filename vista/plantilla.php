<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inventario</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- PLUGIN DE CSS -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vista/plugins/fontawesome-free/css/all.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="vista/dist/css/adminlte.css">

  <!-- PLUGINS DE JS -->

  <!-- jQuery -->
  <script src="vista/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- AdminLTE App -->
  <script src="vista/dist/js/adminlte.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <!-- <script src="vista/dist/js/demo.js"></script> -->

</head>
<!-- CUERPO DE LA CABECERA -->

<body class="hold-transition sidebar-collapse sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
 
  <!-- MODULO DE LA CABECERA -->
  <?php
    include 'modulos/cabecera.php';

    include 'modulos/menu-lateral.php';

    include 'modulos/inicio.php';

     /*=============================================
    CONTENIDO
    =============================================*/

    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "inicio" ||
         $_GET["ruta"] == "usuarios" ||
         $_GET["ruta"] == "equipos" ||
         $_GET["ruta"] == "proveedor" ||
         $_GET["ruta"] == "categorias" ||
         $_GET["ruta"] == "planta" ||
         $_GET["ruta"] == "sector" ||
         $_GET["ruta"] == "estacion" ||
         $_GET["ruta"] == "reportes" ||
         $_GET["ruta"] == "salir"){

        include "modulos/".$_GET["ruta"].".php";

      }else{

        include "modulos/404.php";

      }

    }else{

      include "modulos/inicio.php";

    }

    
    /*=============================================
    FOOTER
    =============================================*/

    include "modulos/footer.php";


    
  ?>
  <!-- Main Sidebar Container -->
 

</div>
<!-- ./wrapper -->

<script src="vista/js/plantilla.js"></script>
</body>
</html>
