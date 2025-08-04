<?php

Class Cracha {

  public function listaCrachas() {

    $sql = "SELECT id, tipo FROM cracha WHERE ocupado = 0";

    $conexao = Conexao::pegarConexao();
    $query = $conexao->query($sql);
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    Conexao::fecharConexao(); 
    return $dados;    

    $idCracha = $row['id'];

  }  
 
}
