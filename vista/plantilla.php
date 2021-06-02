<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inventario</title>

  <link rel="icon" href="vista/plantilla/thn.jpg">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- PLUGIN DE CSS -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vista/plugins/fontawesome-free/css/all.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="vista/dist/css/adminlte.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="vista/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vista/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vista/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- PLUGINS DE JS -->

  <!-- jQuery -->
  <script src="vista/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- AdminLTE App -->
  <script src="vista/dist/js/adminlte.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <!-- <script src="vista/dist/js/demo.js"></script> -->

  <!-- DataTables  & Plugins -->
  <script src="vista/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="vista/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="vista/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="vista/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="vista/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="vista/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="vista/plugins/jszip/jszip.min.js"></script>
  <script src="vista/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="vista/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="vista/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="vista/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="vista/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

</head>
<!-- CUERPO DE LA CABECERA -->

<body class="hold-transition sidebar-collapse sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
 
  <!-- MODULO DE LA CABECERA -->
  <?php
    include 'modulos/cabecera.php';

    include 'modulos/menu-lateral.php';


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
