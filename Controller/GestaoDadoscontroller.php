<?php

require_once '../Config/config.php';  

$dados = $_REQUEST;

$POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

$GestaoDados = new GestaoDados();

$vURL = $dados['vURL'];

##########################################################################

if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($POST['gestaoDados'])) :

  $GestaoDados->resetDados($POST);

  header('Location: ../'.$vURL);

endif;
