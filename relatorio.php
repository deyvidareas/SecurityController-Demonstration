<?php

  require_once 'View/Template/header.php';

  $Relatorio = new Relatorio();
  $listaHistoricoDados = $Relatorio->listaHistoricoDados();

?>

<div class="content-wrapper" style="background: linear-gradient(120deg, #f9fcff, #FFFFFF);">

    <section class="content-header">

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="display-5"><i class="fa fa-clipboard"></i> Gerar Relatório:</h1>
                </div>
            </div>
        </div>

    </section>

    <section class="content">

        <div class="card card-solid bg-card">
            <div class="card-body pb-0">
                <div class="row">              

                    <table id="relatorio" class="table table-md display compact table-bordered table-hover table-responsive-md" style="width:100%">
            
                        <thead>

                            <tr>
                                <th> Nome </th>
                                <th> Setor </th>
                                <th> Tipo </th>
                                <th> Data </th>
                                <th> Horário </th>
                                <th> Cracha </th>
                            </tr>
                            
                        </thead>

                        <tbody>

                            <?php foreach($listaHistoricoDados as $row) : ?>

                                <?php 
                                      $horarioVisita = $row["horarioVisita"];
                                      $horario = substr($horarioVisita, 11);
                                      $data = substr($horarioVisita, 0, 10);
                                      $data = str_replace("-", "/", $data);
                                ?>

                                <tr>
                                    <td> <?php echo $row['nome'] ?> </td>
                                    <td> <?php echo $row['setor'] ?> </td>
                                    <td> <?php echo $row['tipo'] ?> </td>
                                    <td> <?php echo $data ?> </td>
                                    <td> <?php echo $horario ?> </td>
                                    <td> <?php echo $row['idCracha'] ?> </td>
                                </tr>


                            <?php endforeach ?>

                        </tbody>

                    </table>

            </div>
        </div>

    </section>

</div>

<?php
  require_once 'View/Template/footer.php';
?>