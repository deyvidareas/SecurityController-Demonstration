<?php

Class Visitante {

  public function cadastraVisitante($POST){

    try {
      $sql = "INSERT INTO visitante(nome, dataNasc, cpf, identidade, foto, ativo, minutos, idCracha) VALUES (:nome, :dataNasc, :cpf, :identidade, :foto, 0, 0, 0);";

      $conexao = Conexao::pegarConexao();
      $query = $conexao->prepare($sql);
      $query->bindValue(':nome', $POST['nome']);
      $query->bindValue(':dataNasc', $POST['dataNasc']);
      $query->bindValue(':cpf', $POST['cpf']);
      $query->bindValue(':identidade', $POST['identidade']);
      $query->bindValue(':foto', $POST['foto']);
      $query->execute();

      Mensagens::setMsg('Cadastro realizado com sucesso!', 'successMsg');


    } catch (Exception $e) {
      
      Mensagens::setMsg('Ocorreu um erro: ' . $e->getMessage(), 'errorMsg');

    }  

  }

  public function deletaVisitante($POST){

    try{

      $id = $_REQUEST['id'];

      $sql = "DELETE FROM visitante WHERE id = " . $id ;
      $conexao = Conexao::pegarConexao();
      $query = $conexao->prepare($sql);
      $query->execute();

      Conexao::fecharConexao(); 

      Mensagens::setMsg('Visitante Deletado com sucesso!', 'successMsg');

    } catch (Exception $e){

      echo 'Ocorreu um erro:' . $e->getMessage();

    }

  }


  public function cadastraEntradaVisitante($POST){

    $time     = strval(date('d-m-Y H:i:s', time()));
    $idPessoa = $_POST['selectVisita'];
    $idCracha = $_POST['selectCracha'];
    $setor    = $_POST['selectSetor'];
    $motivoVisita   = $_POST['textMotivoVisita'];
    $default  = 1;

    try {

        $conexao = Conexao::pegarConexao();

        $sql = "UPDATE visitante SET horEntradaTemp = \"".substr($time, 11)."\" WHERE id = ".$idPessoa;
        $query = $conexao->prepare($sql);
        $query->execute();

        $sql = "UPDATE visitante SET ativo = '1' WHERE id = ".$idPessoa;
        $query = $conexao->prepare($sql);
        $query->execute();

        $sql = "UPDATE visitante SET idCracha = :selectCracha WHERE id = ".$idPessoa;
        $query = $conexao->prepare($sql);
        $query->bindValue(':selectCracha', $_POST['selectCracha']);
        $query->execute();

        $sql = "UPDATE cracha SET ocupado = '1' WHERE id = ".$idCracha;
        $query = $conexao->prepare($sql);
        $query->execute();

        $sql = "UPDATE visitante SET setor = :selectSetor WHERE id = ".$idPessoa;
        $query = $conexao->prepare($sql);
        $query->bindValue(':selectSetor', $_POST['selectSetor']);
        $query->execute();

        $sql = "UPDATE visitante SET motivoVisita = :textMotivoVisita WHERE id = ".$idPessoa;
        $query = $conexao->prepare($sql);
        $query->bindValue(':textMotivoVisita', $_POST['textMotivoVisita']);
        $query->execute();
        
        $sql = "INSERT INTO relatorio (idVisitante, idCracha, horarioVisita, tipo, setor, motivoVisita) VALUES(:selectVisita, :selectCracha,  now(), :ativo, :selectSetor, :textMotivoVisita)";
        $query = $conexao->prepare($sql);
        $query->bindValue(':selectVisita', $idPessoa);
        $query->bindValue(':selectCracha', $_POST['selectCracha']);
        $query->bindValue(':selectSetor', $_POST['selectSetor']);
        $query->bindValue(':ativo', $default);
        $query->bindValue(':textMotivoVisita', $_POST['textMotivoVisita']);
        $query->execute();

        $_SESSION['STATUS'] = 'SUCCESS';

        Mensagens::setMsg('Entrada realizada com sucesso!', 'successMsg');

    } catch (Exception $e) {

        Mensagens::setMsg('Ocorreu um erro: ' . $e->getMessage(), 'errorMsg');

    }
    
  }

  public function registraSaidaVisitante($idVisitante, $idCracha) {

  try {
      $conexao = Conexao::pegarConexao();
      $sql = "UPDATE visitante SET ativo = 0, idCracha = 0 WHERE id = :id";
      $query = $conexao->prepare($sql);
      $query->bindValue(':id', $idVisitante);
      $query->execute();

      $sql = "UPDATE cracha SET ocupado = 0 WHERE id = :idCracha";
      $query = $conexao->prepare($sql);
      $query->bindValue(':idCracha', $idCracha);
      $query->execute();

      Conexao::fecharConexao(); 

      Mensagens::setMsg('Visitante Saiu com sucesso!', 'successMsg');

  } catch (Exception $e) {
      echo 'Ocorreu um erro:' . $e->getMessage();
    exit();
  }
 
  }    

  public function listaVisitantes() {
    
    $sql = "SELECT id, nome, identidade FROM visitante WHERE ativo = 0 ORDER BY nome ASC";

    $conexao = Conexao::pegarConexao();
    $query = $conexao->query($sql);
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);

    $rows = count($dados);

    if ($rows <= 0) {  

      Mensagens::setMsg('Não é possivel cadastrar nenhuma entrada, pois nenhum visitante foi cadastrado, ou todos os visitantes já entraram.', 'warningMsg');

    }

    Conexao::fecharConexao(); 
    return $dados; 

  }


  public function dadosVisitantePainel() {

    $sql = "SELECT id, nome, foto, minutos, idCracha, setor, horEntradaTemp, motivoVisita FROM visitante WHERE ativo = 1";
  
    $conexao = Conexao::pegarConexao();
    $query = $conexao->query($sql);
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    
    $rows = count($dados);

    if ($rows <= 0) {  

      Mensagens::setMsg('Nenhum visitante foi encontrado.', 'warningMsg');

    }
    
    Conexao::fecharConexao();
    return $dados;
     
        
    

  }  
    
}