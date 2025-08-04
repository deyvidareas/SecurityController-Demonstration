<?php

  class App
  {

    protected $idUsuario;
    protected $email;
    protected $nome;
    protected $tipo;

    public function __construct()
    {
      $this->idUsuario = $_SESSION['id'];
      $this->matricula = $_SESSION['email'];
      $this->nome = $_SESSION['nome'];
      $this->tipo = $_SESSION['tipoUsuario'];
    }

  }