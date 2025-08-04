<?php

class Relatorio{

  public function listaHistoricoDados() {
    
    $sql = "SELECT relatorio.id, relatorio.idVisitante, relatorio.idCracha, relatorio.horarioVisita, relatorio.tipo, relatorio.setor, relatorio.motivoVisita, visitante.nome FROM relatorio INNER JOIN visitante ON visitante.id = relatorio.idVisitante ORDER BY relatorio.id DESC";

    $conexao = Conexao::pegarConexao();
    $query = $conexao->query($sql);
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    Conexao::fecharConexao(); 
  
    return $dados;    
    
  }


}

?>