<?php
  require_once 'View/Template/header.php';

  $Cracha = new Cracha();
  $listaCrachas = $Cracha->listaCrachas();

  $Visitante = new Visitante();
  $listaVisitantes = $Visitante->listaVisitantes();

?>

<div class="content-wrapper" style="background: linear-gradient(120deg, #f9fcff, #FFFFFF);">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="display-5"><i class="fas fa-door-open"></i> Entrada do Visitante:</h1>
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
                                            <i class="fa fa-plus m-1 fa-lg ml-2 float-left" aria-hidden="true"></i>
                                            <h1 class="card-title font-weight-bold" style="font-size: 20px;">
                                                Cadastrar Entada:
                                            </h1>
                                        </span>

                                    </div>

                                    <form id="quickForm" action="Controller/VisitanteController.php" method="POST"
                                        autocomplete="off">

                                        <input type="hidden" name="cadastraEntradaVisitante" value="true">
                                        <input type="hidden" name="vURL" value="<?php echo URL_ATUAL ?>">

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Lista de Visitantes:</label>

                                                <select class="form-control" name="selectVisita"
                                                    id="exampleFormControlSelect1" onchange="clienteChange()"
                                                    id="cliente" name="cliente" type="search" required>

                                                    <option value="" disabled selected>Selecione o Visitante:</option>

                                                    <?php foreach($listaVisitantes as $row) : ?>

                                                    <option value="<?php echo $row['id']?>"> <?php echo $row['nome']?> -
                                                        <?php echo $row['identidade']?>
                                                    </option>

                                                    <?php endforeach ?>

                                                </select>

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Lista de Crachas Disponíveis:</label>

                                                <select class="form-control" name="selectCracha"
                                                    id="exampleFormControlSelect1" onchange="clienteChange()"
                                                    id="cliente" name="cliente" type="search" required>

                                                    <option value="" disabled selected>Selecione o Cracha:</option>

                                                    <?php foreach($listaCrachas as $row) : ?>

                                                    <option value="<?php echo $row['id']?>"> <?php echo $row['id']?> -
                                                        <?php echo $row['tipo']?></option>

                                                    <?php endforeach ?>

                                                </select>

                                            </div>

                                            <div class="form-group">
                                                <label for="inputCPF">Lista de Setores:</label>

                                                <select class="form-control" name="selectSetor" id="setores" required>
                                                    <option value="" disabled selected>Selecione o Setor de Destino:
                                                    </option>

                                                </select>

                                                <script src="Assets/js/setores.js"></script>

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Motivo da Visita:</label>

                                                <textarea class="form-control" rows="10" name="textMotivoVisita"
                                                    placeholder="" required></textarea>

                                            </div>

                                        </div>

                                        <div class="card-footer bg-light">
                                            <input type="reset" value="Limpar Campos" class="btn btn-secondary"
                                                style="margin-right: 10px;">
                                            <input type="submit" value="Cadastrar" class="btn btn-primary float-right">
                                        </div>

                                    </form>

                                </div>

                            </div>
                        </div>

                    </section>

                </div>
            </div>
        </div>

    </div>
</div>

<?php
  require_once 'View/Template/footer.php';
?>