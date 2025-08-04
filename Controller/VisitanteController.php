<?php

  require_once '../Config/config.php';  

  $dados = $_REQUEST;

  $vURL = $dados['vURL'];

  $Visitante = new Visitante();

##########################################################################
if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($dados['cadastraVisitante'])) :

  $Visitante->cadastraVisitante($dados);

  header('Location: ../'.$vURL);

  //Sistema::Debug($dados);

endif;
##########################################################################

##########################################################################

if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($dados['cadastraEntradaVisitante'])) :

  $Visitante->cadastraEntradaVisitante($dados);

  header('location:../painel.php');

endif;

##########################################################################

##########################################################################

if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($dados['registraSaidaVisitante'])) :

  $idVisitante = $dados['id_Visitante'];
  $idCracha = $dados['id_Cracha'];

  $Visitante->registraSaidaVisitante($idVisitante, $idCracha);

  header('Location: ../'.$vURL);

endif;

##########################################################################

##########################################################################

if (($_SERVER['REQUEST_METHOD'] === 'GET') && isset($dados['deletaVisitante'])) :

  $Visitante->deletaVisitante($dados);

  header('Location: ../consulta.php');

endif;

##########################################################################



