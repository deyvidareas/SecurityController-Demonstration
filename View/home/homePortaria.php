<?php

  $Funcionarios = new Funcionarios();
  $listaFuncionariosPortaria = $Funcionarios->listaFuncionariosPortaria();

  $Visitante = new Visitante();
  
?>

<div class="content-wrapper" style="background: linear-gradient(120deg, #f9fcff, #FFFFFF);">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="display-5"><i class="fa fa-id-badge"></i> Cadastrar Visitante:</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="content">

      <div class="card card-solid bg-card">
        <div class="card-body pb-0">
          <div class="row">

            <section class="content">

              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">

                    <form name="frmcad" method="post" action="./Controller/VisitanteController.php" class="needs-validation" id="formVisitante" novalidate>

                      <div class="row">

                        <input type="hidden" name="cadastraVisitante" value="true">
                        <input type="hidden" name="vURL" value="cadastroEntrada.php">

                        <div class="col-12">

                          <div id="camposFormulario">
                            <div class="form-row">

                              <div class="form-group col-md-12">
                                <label for="exampleInputPassword1">Nome</label>
                                <input name="nome" id="nome" type="text" preloader="" class="form-control" required>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">Identidade</label>
                                <span style="color: #FF0000;">*</span></label>
                                <input name="identidade" type="identidade" class="form-control" id="identidade"
                                  maxlength="15" required>
                              </div>

                              <div class="form-group col-md-4">
                                <label for="inputCPF">CPF</label>
                                <input name="cpf_funcionarioPortaria" type="text" class="form-control InputCpf"  id="CPF" required>
                              </div>

                              <div class="form-group col-md-4">
                                <label for="inputDataNasc"> Data de Nascimento</label>
                                <input name="dataNasc" type="date" class="form-control" id="inputDataNasc" required>
                              </div>
                              
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="row">

                        <div class="col-lg-7 mt-4 col-md-12 align-items-stretch flex-column">
                          <div class="card bg-light d-flex flex-fill p-0" id="card-camera">

                            <div class="card-header text-muted border-bottom-0 elevation-2"
                              style=" background: linear-gradient(200deg, #0001, #fff);">

                              <h3 class="float-left">Foto do Visitante:</h3>

                              <button type="button" class="btn btn-primary float-right btn-button p-lg-3 p-sm-1 botaoCamera"
                                onclick="tirarFoto()"><i class="fas fa-camera fa-lg-2x fa-sm-1x"></i></button>

                            </div>

                            <div class="card-body elevation-2 mt-0 mb-0" id="body-card">

                              <div class="row mt-0 mb-0">

                                <div class="col-12 mt-0 mb-0" id="previewFoto"
                                  style="width: 640px;"></div>

                              </div>

                            </div>

                            <div class="card-footer mt-0 mb-0 elevation-2"
                              style=" background: linear-gradient(200deg, #00426D, #2A74A8, #7BC1F2, #4B86AD, #00426D); ">
                            </div>

                          </div>
                        </div>

                        <div class="col-lg-5 mt-4 col-md-12 align-items-stretch flex-column">

                          <div class="card bg-light d-flex flex-fill p-0">

                            <div class="card-header text-muted border-bottom-0 elevation-2"
                              style=" background: linear-gradient(200deg, #0001, #fff);">
                              <h5><span id="nome_digitado">Nome:</span></h5>
                            </div>

                            <div class="card-body elevation-2">

                              <div class="row">

                                <div class="col-md-7 col-sm-12">

                                  <ul class="ml-4 fa-ul text-muted">

                                    <input type="hidden" name="id_Visitante" value=" id ">

                                    <li class="medium mt-4"><i class="fas fa-address-card mt-1"></i><span
                                        class="fa-li"></span> Indetidade:
                                      <span id="identidade_digitado">xxxxxxxxxxxxxxx</span>
                                    </li>

                                    <li class="medium mt-3"><i class="fa fa-id-badge mt-1"></i><span
                                        class="fa-li"></span> CPF:
                                      <span id="CPF_digitado">xxx.xxx.xxx-xx</span>
                                    </li>

                                    <li class="medium mt-3"><i class="fas fa-calendar-alt mt-1"></i><span
                                        class="fa-li"></span> Nascimento:
                                      <span id="inputDataNasc_digitado">dd/mm/aaaa</span>
                                    </li>

                                  </ul>

                                  <hr class=" elevation-2 d-md-none d-block mt-5"></hr>

                                </div>

                                  <div id="fotoCapturada" class="col-lg-4 col-md-12 text-center mt-3 mb-3">

                                    <img src="Assets/img/profile.png" alt="user-avatar"
                                      class="img-circle elevation-2 img-fluid imagemCamera">

                                  </div>
                                
                              </div>

                            </div>

                            <div class="card-footer elevation-2 mb-0" style=" background: linear-gradient(200deg, #00426D, #2A74A8, #7BC1F2, #4B86AD, #00426D); ">

                              <div class="col-md-6">

                              </div>

                            </div>

                          </div>

                        </div>                     

                          <div class="card-footer bg-light">
                              <input type="reset" value="Limpar Campos" class="btn btn-secondary"
                                  style="margin-right: 10px;">
                              <input type="submit" value="Cadastrar" class="btn btn-primary float-right btn-cadastrar" disabled>
                          </div>

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

<script src="Assets/js/script.js"></script>
<script src="Assets/js/configWebcam.js"></script>