<?php
  require_once 'Config/config.php';	
  
  if (isset($_SESSION['isLoggedIn'])) :
    $User = new Usuario();
    $User->logout();
  endif;

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Login Sc </title>
  <link rel="icon" href="Assets/img/favicon.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="Assets/bibliotecas/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="Assets/bibliotecas/ionicons/ionicons.min.css">
  <link rel="stylesheet" href="Assets/bibliotecas/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="Assets/bibliotecas/adminlte/adminlte.min.css">

  <!--StyleCadastrar está aqui:  -->
  <link href="Assets/css/styleLogin.css" rel="stylesheet" />

  <!--Logo está aqui:  -->
  <link rel="icon" href="Assets/img/ControllerSecurity-logo.png" type="image/x-icon">


</head>

<body>

  <div class="wrapper fadeInDown">
    <div id="formContent">

      <main class="login">

        <div class="login__container elevation-3">
          
          <div class="container_logo">

            <img id="logoprincipal" class="masthead-avatar mb-5" src="Assets/img/ControlelrSecurity-semBorda.svg"
              width="70" alt="..." />

          </div>

          <div class="col-12">
            <?php Mensagens::display() ?>
          </div>
          
          <form class="login__form" action="Controller/UserController.php" method="POST" autocomplete='on'>

            <input type="hidden" name="vURL" value="login.php">
            <input type="hidden" name="validaLoginUsuario" value="true">

            <select class="form-control form-control-md" name="tipoUsuario" placeholder="Tipo de Usuario" required>
              <option value="" disabled selected>Tipo de Usuário</option>
              <option value="funcionarioPortaria"> Funcionário da Portaria </option>
              <option value="administrador"> Administrador </option>
            </select><br>

            <div class="input-group mb-3">
              <input type="text" name="email" class="login__input" maxlength="200" class="form-control form-control-sm"
                value="" placeholder="E-mail" required autofocus>
              <span class="login__input-border"></span>
            </div>

            <div class="input-group mb-3">
              <input type="password" name="senha" class="login__input" maxlength="200"
                class="form-control form-control-sm" placeholder="Senha" required>
              <span class="login__input-border"></span>
            </div>
            <button type="submit" maxlength="200" class="login__submit elevation-3"> LOGIN </button>
          </form>
          <!--<a class="login__reset" href="index.php#Contato">Esqueceu a senha?</a>-->

        </div>

      </main>
    </div>
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  </div>

  <script src="Assets/bibliotecas/jquery/jquery.min.js"></script>
  <script src="Assets/bibliotecas/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Assets/bibliotecas/Assets/bibliotecas/adminlte.min.js"></script>

</body>

</html>
