<?php	

class Funcionarios {

    public function cadastraFuncionarioPortaria($POST) {

      try {
        $sql = "INSERT INTO funcionarioPortaria (nome, email, senha, cpf) VALUES (:nome_funcionarioPortaria, :email_funcionarioPortaria, :senha_funcionarioPortaria, :cpf_funcionarioPortaria);";

        $conexao = Conexao::pegarConexao();
        $query = $conexao->prepare($sql);
        $query->bindValue(':nome_funcionarioPortaria', $POST['nome_funcionarioPortaria']);
        $query->bindValue(':email_funcionarioPortaria', $POST['email_funcionarioPortaria']);
        $query->bindValue(':senha_funcionarioPortaria', $POST['senha_funcionarioPortaria']);
        $query->bindValue(':cpf_funcionarioPortaria', $POST['cpf_funcionarioPortaria']);
        $query->execute();
        Conexao::fecharConexao();

        Mensagens::setMsg('Funcionario Cadastrado com sucesso!', 'successMsg');

      } catch (Exception $e) {
        echo 'Ocorreu um erro:' . $e->getMessage();
      }

    }

    public function deletaFuncionarioPortaria($POST){

      try{

        $id = $_REQUEST['id'];

        $sql = "DELETE FROM funcionarioPortaria WHERE id = " . $id ;
        $conexao = Conexao::pegarConexao();
        $query = $conexao->prepare($sql);
        $query->execute();

        Mensagens::setMsg('Funcionario Deletado com sucesso!', 'successMsg');

      } catch (Exception $e){

        echo 'Ocorreu um erro:' . $e->getMessage();

      }

    }

    public function listaFuncionariosPortaria (){
    
      $sql = "SELECT * FROM funcionarioPortaria order by nome;";
      $conexao = Conexao::pegarConexao();
      $query = $conexao->query($sql);
      $dados = $query->fetchAll(PDO::FETCH_ASSOC);
      Conexao::fecharConexao();
      return $dados;

    }

    public function cadastraAdministrador($POST) {

      try {
      $sql = "INSERT INTO administrador (nome, email, cpf, senha, nivel) VALUES (:nome_administrador, :email_administrador, :cpf_administrador, :senha_administrador, :nivel_administrador);";

      $conexao = Conexao::pegarConexao();
      $query = $conexao->prepare($sql);
      $query->bindValue(':nome_administrador', $POST['nome_administrador']);
      $query->bindValue(':email_administrador', $POST['email_administrador']);
      $query->bindValue(':cpf_administrador', $POST['cpf_administrador']);
      $query->bindValue(':senha_administrador', $POST['senha_administrador']);
      $query->bindValue(':nivel_administrador', $POST['nivel_administrador']);
      $query->execute();
      Conexao::fecharConexao();

      Mensagens::setMsg('Administrador Cadastrado com sucesso!', 'successMsg');

    } catch (Exception $e) {

      echo 'Ocorreu um erro:' . $e->getMessage();
      
    }

  }

  public function deletaAdministrador($POST){

    try{

      $id = $_REQUEST['id'];

      $sql = "DELETE FROM administrador WHERE id = " . $id ;
      $conexao = Conexao::pegarConexao();
      $query = $conexao->prepare($sql);
      $query->execute();

      Mensagens::setMsg('Administrador Deletado com sucesso!', 'successMsg');

    } catch (Exception $e){

      echo 'Ocorreu um erro:' . $e->getMessage();

    }

  }

  public function listaAdministradores ()
  {
  
    $sql = "SELECT * FROM administrador order by nome;";
    $conexao = Conexao::pegarConexao();
    $query = $conexao->query($sql);
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    Conexao::fecharConexao();
    return $dados;

  }

  

}
    