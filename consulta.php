<?php
  require_once 'View/Template/header.php';

  $Visitante = new Visitante();
  $listaVisitantes = $Visitante->listaVisitantes();

?>

<div class="content-wrapper" style="background: linear-gradient(120deg, #f9fcff, #FFFFFF);">

    <section class="content-header">

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="display-5"><i class="fa fa-search"></i> Lista de Visitantes:</h1>
                </div>
            </div>
        </div>

    </section>

    <section class="content">

        <div class="card card-solid bg-card">
            <div class="card-body pb-0">
                <div class="row">

                    <div class="col-12">

                        <?php Mensagens::display() ?>

                        <table class="datatable table table-sm table-hover table-responsive-md display compact table-bordered">
            
                            <thead>
                                <tr>
                                    <th> Nome </th>
                                    <th> Identidade </th>
                                    <th> Excluir </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($listaVisitantes as $row) : ?>
                                <tr>

                                    <td> <?php echo $row['nome'] ?> </td>
                                    <td> <?php echo $row['identidade'] ?> </td>

                                    <td> 
                                        <a href="./Controller/VisitanteController.php?id=<?php echo $row['id']?>&deletaVisitante=true&vURL=<?php echo URL_ATUAL ?>" class="btn btn-sm btn-flat btn-danger"> 
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


<?php
  require_once 'View/Template/footer.php';
?>

