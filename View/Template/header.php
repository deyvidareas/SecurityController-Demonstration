<?php
require_once './Config/config.php';
$usuario = new Usuario();
$usuario->isLoggedIn();
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SC-ISERJ</title>
  <link rel="icon" href="Assets/img/icon.png" type="image/x-icon">

  <link rel="stylesheet" href="Assets/bibliotecas/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="Assets/bibliotecas/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="Assets/bibliotecas/icheck-bootstrap/icheck-bootstrap.min.css">

  <link rel="stylesheet" href="Assets/bibliotecas/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="Assets/bibliotecas/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="Assets/bibliotecas/select2/css/select2.min.css">
  <link rel="stylesheet" href="Assets/bibliotecas/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="Assets/bibliotecas/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <link rel="stylesheet" href="Assets/bibliotecas/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="Assets/bibliotecas/toastr/toastr.min.css">
  <link rel="stylesheet" href="Assets/bibliotecas/adminlte/adminlte.min.css">

  <link rel="stylesheet" href="Assets/bibliotecas/ionicons/ionicons.min.css">
  <link rel="stylesheet" href="Assets/bibliotecas/jquery-ui-1.12.1/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="Assets/bibliotecas/datatable/buttons.dataTables.min.css">


  <!--<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">-->

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="Assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="Assets/css/fonts.css" rel="stylesheet">
  <link href="Assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/painel.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" > </script>

  
  <script src="Assets/js/webcam.min.js"></script>
  <script src="Assets/js/filtro.js"></script> <?php // <-- Para poder fazer o filtro de pesquisa?>

  <!--<script src="Assets/bibliotecas/jquery/jquery-3.2.1.slim.min.js"></script>-->
  <!--<script src="Assets/bibliotecas/jquery/jquery.min.js"></script>-->

  <script src="Assets/bibliotecas/jquery-ui/jquery-ui.min.js"></script>
  <script src="Assets/bibliotecas/highcharts/highcharts.js"></script>
  <script src="Assets/bibliotecas/highcharts/exporting.js"></script>
  <script src="Assets/bibliotecas/highcharts/export-data.js"></script>
  <script src="Assets/bibliotecas/highcharts/accessibility.js"></script>

  <script src="Assets/bibliotecas/sweetalert2/sweetalert2.min.js"></script>
  <script src="Assets/bibliotecas/toastr/toastr.min.js"></script>

  <script src="Assets/js/mensagem.js"></script>

  <!-- Inicio Tabela Configs -->

  <script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
  <script type="text/javascript" language="javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" language="javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>


    <script src="Assets/js/script.js"></script>

  <!-- End Tabela Configs -->

</head>

<body class="hold-transition sidebar-mini layout-fixed navbar-fixed-top">

  <div class="wrapper mt-5 mb-0">

    <!-- Navbar -->
    <nav class="fixed-top main-header navbar navbar-expand navbar-white navbar-light" id="bg_nav">
      <!-- Left navbar links -->

      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars fa-1x"></i></a>
        </li>

      </ul>


        
        


      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link text-danger" href="login.php"> <i class="fas fa-sign-out-alt text-danger "></i> <strong>
              Sair </strong> </a>
        </li>
      </ul>
    </nav>

    <?php require_once "aside.php"?>