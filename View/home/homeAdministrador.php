<?php

  $Funcionarios = new Funcionarios();
  $listaFuncionariosPortaria = $Funcionarios->listaFuncionariosPortaria();
  
?>

<div class="content-wrapper" style="background: linear-gradient(120deg, #f9fcff, #FFFFFF);">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="display-5"></i> Funcionario da Portaria: </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="card card-solid bg-card">
            <div class="card-body pb-0">
                <div class="row">

                    <section class="content">

                        <div class="row">

                            <div class="col-12">

                                <?php Mensagens::display() ?>

                                <div class="card card-primary">
                                    <div class="card-header"
                                        style=" background: linear-gradient(90deg, #00426D, #2A74A8, #7BC1F2, #4B86AD, #00426D); ">
                                        <span>
                                            <i class="fa fa-plus m-1 fa-lg float-left mr-2" aria-hidden="true"></i>
                                            <h1 class="card-title font-weight-bold" style="font-size: 20px;">
                                                Cadastrar Funcionario:
                                            </h1>
                                        </span>
                                    </div>

                                    <form id="quickForm" action="./Controller/FuncionarioController.php" method="POST"
                                        autocomplete="off">

                                        <input type="hidden" name="cadastraFuncionarioPortaria" value="true">
                                        <input type="hidden" name="vURL" value="<?php echo URL_ATUAL ?>">

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nome</label>
                                                <input type="text" name="nome_funcionarioPortaria" class="form-control"
                                                    id="nome" placeholder="Digite o nome e sobrenome do Funcionario:"
                                                    required>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email" name="email_funcionarioPortaria"
                                                    class="form-control" id="exampleInputEmail1"
                                                    placeholder="Digite o email do Funcionario:" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputCPF">CPF</label>
                                                <input name="cpf_funcionarioPortaria" type="text"
                                                    class="form-control InputCpf"
                                                    placeholder="Digite o CPF do Funcionario:" id="CPF" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Senha</label>
                                                <input type="password" name="senha_funcionarioPortaria"
                                                    class="form-control" id="exampleInputPassword1"
                                                    placeholder="Digite a senha do Funcionario:" required>
                                            </div>

                                        </div>

                                        <div class="card-footer bg-light">
                                            <input type="reset" value="Limpar Campos" class="btn btn-secondary"
                                                style="margin-right: 10px;">
                                            <input type="submit" value="Cadastrar" class="btn btn-primary float-right">
                                        </div>

                                    </form>

                                </div>

                                <div class="card card-primary">

                                    <div class="card-header"
                                        style=" background: linear-gradient(90deg, #00426D, #2A74A8, #7BC1F2, #4B86AD, #00426D); ">
                                        <span>
                                            <i class="fas fa-clipboard m-1 fa-lg float-left mr-2"
                                                aria-hidden="true"></i>
                                            <h1 class="card-title font-weight-bold" style="font-size: 20px;">
                                                Lista de Funcionarios:
                                            </h1>
                                        </span>
                                    </div>

                                    <div class="card-body">

                                        <table id="example1"
                                            class="datatable table table-sm table-hover table-responsive-md display compact table-bordered">

                                            <thead style=" background: linear-gradient(200deg, #0001, #fff);">
                                                <tr>
                                                    <th> CPF </th>
                                                    <th> Email </th>
                                                    <th> Senha </th>
                                                    <th> Excluir </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($listaFuncionariosPortaria as $row) :?>

                                                <tr>
                                                    <td> <?php echo $row['cpf'] ?> </td>
                                                    <td> <?php echo $row['email'] ?> </td>
                                                    <td> <?php echo $row['senha'] ?> </td>

                                                    <td>

                                                        <a href="./Controller/FuncionarioController.php?id=<?php echo $row['id']?>&deletaFuncionarioPortaria=true&vURL=<?php echo URL_ATUAL ?>"
                                                            class="btn btn-sm btn-flat btn-danger">

                                                            <i class="fa fa-trash"></i> Excluir </a>


                                                    </td>

                                                </tr>

                                                <?php endforeach ?>
                                            </tbody>

                                        </table>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </section>

                </div>
            </div>
        </div>


    </div>

</div>