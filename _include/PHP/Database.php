<?php

  class Database
  {

    public static function fetchAll ($sql)
    {
      
      $conexao = Conexao::pegarConexao();
      $query = $conexao->query($sql);
      $query->execute();
      $dados = $query->fetchAll(PDO::FETCH_ASSOC);
      Conexao::fecharConexao();
      return $dados;

    }

    public static function fetch ($sql)
    {
      
      $conexao = Conexao::pegarConexao();
      $query = $conexao->query($sql);
      $query->execute();
      $dados = $query->fetch(PDO::FETCH_ASSOC);
      Conexao::fecharConexao();
      return $dados;

    }

  }