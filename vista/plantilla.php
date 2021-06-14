<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inventario</title>

  <link rel="icon" href="vista/plantilla/thn.jpg">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

     <!--=====================================
  PLUGINS DE CSS
  ======================================-->

 

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vista/plugins/fontawesome-free/css/fontawesome.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="vista/dist/css/adminlte.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel="stylesheet" href="vista/css/estilos.css">
  
  <!-- PLUGINS DE JS -->

  <!-- jQuery -->
  <script src="vista/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- CDN SELECT 2 -->
  <link href="vista/plugins/select2/css/select2.css" rel="stylesheet" />
  <script src="vista/plugins/select2/js/select2.min.js"></script>

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

  <!-- SweetAlert 2 -->
  <script src="vista/plugins/sweetalert.min.js"></script>



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
         $_GET["ruta"] == "plantas" ||
         $_GET["ruta"] == "sector" ||
         $_GET["ruta"] == "estacion" ||
         $_GET["ruta"] == "lugar-trabajo" ||
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
<script src="vista/js/usuarios.js"></script>
</body>
</html>
