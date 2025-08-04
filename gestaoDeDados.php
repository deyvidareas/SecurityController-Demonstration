<?php
  require_once 'View/Template/header.php';
?>

<div class="content-wrapper" style="background: linear-gradient(120deg, #f9fcff, #FFFFFF);">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="display-5"><i class="fas fa-database"></i> Registros dos Visitantes:</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="container-fluid">

            <div class="card card-solid bg-card">
                <div class="card-body pb-0">
                    <div class="row">

                        <section class="content">

                            <div class="container-fluid">
                                <div class="row">

                                    <div class="col-12">

                                        <?php Mensagens::display() ?>

                                        <div class="card card-primary text-center">

                                            <div class="card-header"
                                                style=" background: linear-gradient(90deg, #00426D, #2A74A8, #7BC1F2, #4B86AD, #00426D); ">
                                            </div>

                                            <div class="card-body d-none d-md-block">

                                                        <a class="brand-link text-danger logo">
                                                            <img src="Assets/img/ControlelrSecurity-semBorda.svg"
                                                                class="d-none d-md-block">
                                                        </a>

                                            </div>

                                            <div class="card-footer bg-light">

                                                <form method="post" action="relatorio.php">

                                                    <button class="btn btn-primary float-md-left p-3 mt-3"
                                                        data-toggle="modal" data-target="#exampleModal" type="submit"
                                                        value="Backup">
                                                        <h5 class="ml-2 mr-2"> Relatorio <i
                                                                class="fa fa-clipboard m-2"></i> </h5>
                                                    </button>

                                                </form>

                                                <form method="post">

                                                    <button type="button" class="btn btn-danger float-md-right p-3 mt-1"
                                                        data-toggle="modal" data-target="#modalReset">
                                                        <h5 class="ml-3 mr-3">Apagar<i
                                                                class="fas fa-trash-restore m-2"></i> </h5>
                                                    </button>

                                                </form>

                                            </div>

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
</div>

<?php
  require_once 'View/Template/footer.php';
?>

<div class="modal fade" id="modalReset" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-alert" id="exampleModalLabel">
                    Atenção! Salve um relatório antes de apagar os registros.
                </h5>

                <button type="button" class="close text-align: center;" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                Tem certeza que deseja apagar todos os Registros dos
                visitantes?
            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-primary float-left" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">Cancelar</span>
                </button>

                <form method="post" action="./Controller/GestaoDadosController.php"
                    style="padding: 10px; border: 0px solid black; border-radius: 10px;">

                    <input type="hidden" name="gestaoDados" value="true">
                    <input type="hidden" name="vURL" value="<?php echo URL_ATUAL ?>">

                    <button class="btn btn-danger float-right" data-toggle="modal" data-target="#exampleModal"
                        type="submit" value="Resetar"> Sim Apagar
                    </button>

                </form>

            </div>

        </div>
    </div>

</div>