<?php

require_once '../Config/config.php';  

$dados = $_REQUEST;

$POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

$Funcionarios = new Funcionarios();

$vURL = $dados['vURL'];

##########################################################################

if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($POST['cadastraFuncionarioPortaria'])) :

  $Funcionarios->cadastraFuncionarioPortaria($POST);

  header('Location: ../'.$vURL);

endif;

if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($POST['cadastraAdministrador'])) :

  $Funcionarios->cadastraAdministrador($POST);

  header('Location: ../'.$vURL);

endif;


##########################################################################


##########################################################################

if (($_SERVER['REQUEST_METHOD'] === 'GET') && isset($dados['deletaFuncionarioPortaria'])) :

$Funcionarios->deletaFuncionarioPortaria($dados);

header('Location: ../'.$vURL);

endif;


if (($_SERVER['REQUEST_METHOD'] === 'GET') && isset($dados['deletaAdministrador'])) :

$Funcionarios->deletaAdministrador($dados);

header('Location: ../'.$vURL);

endif;

##########################################################################

