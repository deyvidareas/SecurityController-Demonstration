<?php

  require_once '../Config/config.php';  

  $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

  $usuario = new Usuario();

  $vURL = $POST['vURL'];

##########################################################################
if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($POST['validaLoginUsuario'])) :

  $email = $POST['email']; 
  $senha = $POST['senha'];
  $tipo = $POST['tipoUsuario'];

  $result = $usuario->validaLoginUsuario($email, $senha, $tipo);
  
  if (empty($result)) {

    Mensagens::setMsg('Usuário ou Senha incorretos ! ', 'errorMsg');
    header('Location: ../'.$vURL);

  } else {

    $_SESSION['id'] = $result['id'];
    $_SESSION['email'] = $result['email'];
    $_SESSION['nome'] = $result['nome'];
    $_SESSION['isLoggedIn'] = true;
    $_SESSION['tipoUsuario'] = $tipo;
    $_SESSION['nivelUsuario'] = isset($result['nivel']) ? $result['nivel'] : null;
    $_SESSION['mudouSenha'] = isset($result['mudouSenha']) ? $result['mudouSenha'] : null;

    header('Location: ../index.php');

  }

endif;

##########################################################################
if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($POST['mudarSenha'])) :


  $usuario->mudarSenha($_SESSION['tipoUsuario'], $_SESSION['id'], $POST['novaSenha'], $_SESSION['mudouSenha']);
  
  header('Location: ../'.$vURL);


endif;
##########################################################################


##########################################################################
if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($POST['efetuaLogoutfuncionariosPortaria'])) :

  unset($_SESSION['id']);
  unset($_SESSION['email']);
  unset($_SESSION['nome']);
  unset($_SESSION['isLoggedIn']);
  unset($_SESSION['tipoUsuario']);

  header('Location: ../index.php');

endif;
##########################################################################
