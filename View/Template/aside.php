<aside class="main-sidebar sidebar-light-primary elevation-4" id="bg-aside">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link text-dark" id="bg-nav-titulo">
    <img src="Assets/img/favicon.ico" alt="Logo ISERJ" class="brand-image img-circle elevation-2">
    <span class="brand-text"><?php echo $_SESSION['nome'] ?></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="Assets/img/profile.png" class="img-circle elevation-2" alt="User Image">
      </div>

      <div class="info">
        <a href="#" class="d-block wordwrap" title="Seu Email"> <?php echo $_SESSION['email'] ?> </a>
      </div>

    </div>

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact" data-widget="treeview" role="menu"
        data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <!--<li class="nav-item"> 
            <a href="index.php" class="nav-link" <php Sistema::subMenuAtivo(URL_ATUAL, "index.php") ?>>
              <i class="fas fa-home"></i> <p> Principal </p>
            </a>
          </li> -->

        <?php if ($_SESSION['tipoUsuario'] == 'administrador') : ?>

          <li class="nav-item">
            <a class="nav-link <?php Sistema::subMenuAtivo(URL_ATUAL, "index.php") ?>" href="index.php">
              <i class="fas fa-user-plus m-2"></i>
              <p>Cadastrar Funcionario</p>
            </a>
          </li>


        <?php endif ?>

        

        <?php if ($_SESSION['nivelUsuario'] == 1) : ?>

          <li class="nav-item">
            <a class="nav-link <?php Sistema::subMenuAtivo(URL_ATUAL, "cadastroAdministradores.php") ?>" href="cadastroAdministradores.php">
              <i class="fas fa-user-plus m-2"></i>
              <p>Cadastrar Administrador</p>
            </a>
          </li>

        <?php endif ?>

        

        <?php if ($_SESSION['tipoUsuario'] == 'funcionarioPortaria') {?>

          <li class="nav-item">
            <a class="nav-link <?php Sistema::subMenuAtivo(URL_ATUAL, "index.php") ?>" href="index.php">
              <i class="fa fa-id-badge m-2"></i>
              <p>Cadastrar Visitante</p>
            </a>
          </li>

        <?php } else { ?>

          <li class="nav-item">
            <a class="nav-link <?php Sistema::subMenuAtivo(URL_ATUAL, "cadastro.php") ?>" href="cadastro.php">
              <i class="fa fa-id-badge m-2"></i>
              <p>Cadastrar Visitante</p>
            </a>
          </li>

        <?php } ?>


        <li class="nav-item">
          <a class="nav-link <?php Sistema::subMenuAtivo(URL_ATUAL, "cadastroEntrada.php") ?>"
            href="cadastroEntrada.php">
            <i class="fas fa-door-open m-2"></i>
            <p>Cadastrar Entrada</p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php Sistema::subMenuAtivo(URL_ATUAL, "painel.php") ?>" href="painel.php">
            <i class="fa fa-id-card m-2"></i>
            <p>Painel</p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php Sistema::subMenuAtivo(URL_ATUAL, "consulta.php") ?>" href="consulta.php">
            <i class="fa fa-search m-2"></i>
            <p>Consulta</p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php Sistema::subMenuAtivo(URL_ATUAL, "relatorio.php") ?>" href="relatorio.php">
            <i class="fa fa-clipboard m-2"></i>
            <p>Relatório</p>
          </a>
        </li>


        <?php if ($_SESSION['tipoUsuario'] == 'administrador') {?>

          <li class="nav-item">
            <a class="nav-link <?php Sistema::subMenuAtivo(URL_ATUAL, "gestaoDeDados.php") ?>" href="gestaoDeDados.php">
              <i class="fas fa-database m-2"></i>
              <p>Gestão de Dados</p>
            </a>
          </li>

        <?php } ?>

        <li class="nav-item">
            <a class="nav-link <?php Sistema::subMenuAtivo(URL_ATUAL, "sobre.php") ?>" href="sobre.php">
              <i class="fas fa-info-circle m-2"></i>
              <p>Sobre o Sistema</p>
            </a>
          </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>