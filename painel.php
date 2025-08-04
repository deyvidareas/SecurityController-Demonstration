<?php
  require_once 'View/Template/header.php';

  $Visitante = new Visitante();
  $dadosVisitantePainel = $Visitante->dadosVisitantePainel();

  $Cracha = new Cracha();
  $listaCrachas = $Cracha->listaCrachas();

?>

<div class="content-wrapper" style="background: linear-gradient(120deg, #f9fcff, #FFFFFF);">

    <section class="content-header">

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <h1 class="display-6"><i class="fa fa-id-card lg"></i> Painel de Entradas:</h1>
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
                    </div>    


                        <?php foreach($dadosVisitantePainel as $row) : ?>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex align-items-stretch flex-column">

                                <div class="card bg-light d-flex flex-fill elevation-2">

                                    <div class="card-header text-muted border-bottom-0 elevation-1"
                                        style="background: linear-gradient(120deg, #f5faff, #FFFFFF);">
                                        <h5> <?php echo $row['nome'] ?> </h5>
                                    </div>

                                    <div class="card-body" style="background: linear-gradient(120deg, #f5faff, #FFFFFF);">

                                        <div class="row">

                                            <div class="col-md-7 col-sm-12">

                                                <ul class="ml-4 fa-ul text-muted mb-5">

                                                    <li class="medium mt-3"><span class="fa-li">
                                                            <i class="fas fa-clock mt-1"></i></span> Horario de Entrada:
                                                        <?php echo $row['horEntradaTemp'] ?>
                                                    </li>

                                                    <li class="medium mt-2"><span class="fa-li">
                                                            <i class="fa fa-id-badge mt-1"></i></span> Cracha:
                                                        <?php echo $row['idCracha'] ?>
                                                    </li>

                                                    <li class="medium mt-2"><span class="fa-li">
                                                            <i class="fa fa-clipboard mt-1"></i></span> Setor:
                                                        <?php echo $row['setor'] ?>
                                                    </li>                                              

                                                    <li class="medium mt-2"><span class="fa-li">

                                                        <button class="btn btn-sm btn-primary motivo_visita mt-2 ml-2 elevation-2 mb-5" data-toggle="modal" data-id="<?php echo $row['id'] ?>"
                                                            data-motivovisita="<?php echo $row['motivoVisita'] ?>" data-target="#modal-motivoVisita">
                                                            <i class="fas fa-file"></i> Motivo da Visita 
                                                        </button>

                                                    </li>

                                                </ul>
                                           
                                            </div>   
                                            
                                            <div class="col-12 d-md-none d-block">
                                                <hr class=" elevation-2 d-md-none d-block mt-4"></hr>
                                            </div>

                                            <div class="col-md-5 col-sm-12 text-center mt-3">
                                                <img src="<?php echo $row['foto'] ?>" alt="user-avatar"
                                                    class="img-circle elevation-2 img-fluid">
                                            </div>

                                        </div>

                                    </div>

                                    <div class="card-footer mb-0"
                                        style="background: linear-gradient(120deg, #f5faff, #FFFFFF);">
                                        <div class="text-right">

                                            <form action="./Controller/VisitanteController.php" class="mb-0 p-0" method="POST">

                                                <input type="hidden" name="registraSaidaVisitante" value="true">
                                                <input type="hidden" name="vURL" value="<?php echo URL_ATUAL ?>">
                                                <input type="hidden" name="id_Visitante" value="<?php echo $row['id'] ?>">
                                                <input type="hidden" name="id_Cracha" value="<?php echo $row['idCracha'] ?>">

                                                <button type="submit" class="btn btn-sm btn-dark elevation-2 p-2"> <i
                                                        class="fas fa-sign-out-alt"></i> Saida </button>

                                            </form>

                                        </div>
                                    </div>

                                </div>
                                
                            </div>

                        <?php endforeach ?>

                        <div class="modal fade" id="modal-motivoVisita">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title"> Motivo da Visita: </h5>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>

                                    <div class="modal-body">

                                        <div class="row">

                                            <div class="col-12">
                                                <h6 class="motivo_visita_modal"> </h6>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="col-2 btn btn-sm btn-secondary elevation-2" data-dismiss="modal">
                                            Ok </button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    
                </div>

            </div>
        </div>

    </section>

</div>

<script src="Assets/js/motivo_visita.js"></script>

<?php
  require_once 'View/Template/footer.php';
?>