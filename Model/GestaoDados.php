<?php

class GestaoDados{

  public function resetDados() {
      try {

          $conexao = Conexao::pegarConexao();

          $sql = "DELETE from relatorio where 1";
          $query = $conexao->prepare($sql);
          $query->execute();

          $sql = "DELETE from visitante where 1";
          $query = $conexao->prepare($sql);
          $query->execute();

          $sql = "UPDATE cracha SET ocupado = '0'
          WHERE id >= 0;";
          $query = $conexao->prepare($sql);
          $query->execute();           

          Conexao::fecharConexao();

          Mensagens::setMsg('Registro de Visitantes Resetado com Sucesso', 'successMsg');

      } catch (Exception $e) {
          echo 'Ocorreu um erro:' . $e->getMessage();
          exit();
      }
  }

}

