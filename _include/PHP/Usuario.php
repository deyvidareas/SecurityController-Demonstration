<?php

  class Usuario
  {

    public function validaLoginUsuario($email, $senha, $tipo){
        try {
            if ($tipo == 'funcionarioPortaria') {
                $sql = "SELECT id, email, mudouSenha, nome FROM funcionarioPortaria WHERE email = :email AND senha = :senha";
            } elseif ($tipo == 'administrador') {
                $sql = "SELECT id, email, nome, mudouSenha, nivel FROM administrador WHERE email = :email AND senha = :senha";
            }

            $conexao = Conexao::pegarConexao();
            $query = $conexao->prepare($sql);
            $query->bindValue(':email', $email);
            $query->bindValue(':senha', $senha);
            $query->execute();
            $dados = $query->fetch(PDO::FETCH_ASSOC);
            Conexao::fecharConexao();
            return $dados;
            
        } catch (Exception $e) {
            Mensagens::setMsg('Login e ou Senha, incorretos!', 'errorMsg');
        }
    }

    public static function isLoggedIn()
    {

      if (isset($_SESSION['isLoggedIn'])) :
        return true;

      else :
        header('Location: login.php');
      endif;

    }

    public function mudarSenha($tipoUsuario, $idUsuario, $novaSenhaUsuario, $mudouSenha){
      
      try {

        if ($tipoUsuario == 'funcionarioPortaria') {

          $sql = "UPDATE funcionarioPortaria SET senha = :novaSenha, mudouSenha = '1' WHERE id = :id ";

        } else if ($tipoUsuario == 'administrador'){

          $sql = "UPDATE administrador SET senha = :novaSenha, mudouSenha = '1' WHERE id = :id ";

        }

        $conexao = Conexao::pegarConexao();
        $query = $conexao->prepare($sql);
        $query->bindValue(':novaSenha', $novaSenhaUsuario);
        $query->bindValue(':id', $idUsuario);
        $query->execute();

        $_SESSION['mudouSenha'] = 1;

        Mensagens::setMsg('Sua senha foi atualizada com sucesso!', 'succesMsg');
        
      } catch (Exception $e) {

        Mensagens::setMsg('Ops, Não foi possível Alterar a sua senha!', 'errorMsg');
        
      }

    }
  
    public function logout()
    {

      session_destroy();
      return true;
      
    }       

  }