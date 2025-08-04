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
          <h1 class="display-5"><i class="fa fa-search"></i>  Sobre o Sistema: </h1>
        </div>
      </div>
    </div>

  </section>

  <section class="content">

    <div class="container-fluid">

      <div class="row">

        <div class="col-12 col-md-3">

          <div class="card card-primary elevation-2" id="hero">

            <div class="card-body box-profile" style="background: linear-gradient(120deg, #f5faff, #FFFFFF);">
              <div class="text-center">

                <div class="col-lg-12 order-1 order-lg-2 hero-img">
                  <img src="Assets/img/ControlelrSecurity-semBorda.svg" width="1440" class="img-fluid animated">
                </div>

              </div>

              <a href="index.php" class="btn btn-primary btn-block d-none d-md-block">Security Controller</a>

            </div>

          </div>

        </div>

        <div class="col-md-9">

          <div class="card">

            <div class="card-header p-2 elevation-1" style="background: linear-gradient(120deg, #f5faff, #FFFFFF);">
              <h4 class="text-muted"> Sobre o Sistema:<h4>
            </div>

            <div class="card-body elevation-1" style="background: linear-gradient(120deg, #f5faff, #FFFFFF);">
              <div class="tab-content col-12">

                <div class="active tab-pane col-12" id="activity">

                  <div class="post">
                    <!-- /.user-block -->
                    <p>

                    O Security Controller é um sistema que tem como finalidade controlar o acesso de visitantes ao Instituto Superior de Educação do Rio de Janeiro (ISERJ). 
                    Este sistema está na segunda versão e foi desenvolvido em PHP e JavaScript com HTML, CSS e BootStrap. 
                    Software com patente requerida, todos os direitos estão reservados e protegidos para os desenvolvedores deste projeto.

                    </p>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="card card-solid bg-card elevation-1" style="background: linear-gradient(120deg, #f5faff, #FFFFFF);">

            <div class="card-header p-2 elevation-1" style="background: linear-gradient(120deg, #02395F, #14669C, #1c7fc2, #14669C, #034773)">
              <h4 class="text-white"> Desenvolvedores do Sistema:<h4>
            </div>

            <div class="card-body pb-0">

              <div class="row">              
          
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-stretch flex-column">

                  <div class="card bg-light d-flex flex-fill elevation-2">

                    <div class="card-header text-muted border-bottom-0 elevation-1"
                      style="background: linear-gradient(120deg, #f5faff, #FFFFFF);">
                      <h5> Flavio Mendonça Junior </h5>
                    </div>

                    <div class="card-body" style="background: linear-gradient(120deg, #f5faff, #FFFFFF);">

                      <div class="row">

                        <div class="col-md-7 col-sm-12">

                          <ul class="ml-4 fa-ul text-muted mb-5">

                            <li class="medium mt-3"><span class="fa-li">
                                <i class="fas fa-chalkboard-teacher m-1"></i></span> Professor do ISERJ
                            </li>

                            <li class="medium mt-3"><span class="fa-li">
                                <i class="fas fa-envelope m-1"></i></span> fmendoncajr@gmail.com
                            </li>

                            <li class="medium mt-3"><span class="fa-li">
                                <i class="fas fa-user m-1"></i></span> Funcionario da FAETEC
                            </li>


                            <li class="medium mt-2"><span class="fa-li">

                            <li class="medium mt-2"><span class="fa-li">

                                <form action="https://github.com/FlavioDumortoutdeMendoncajr" target="_blank">

                                  <button class="btn btn-sm btn-primary motivo_visita mt-2 ml-2 elevation-2 mb-5">
                                    <i class="fab fa-github"></i> Github
                                  </button>

                                </form>

                            </li>

                          </ul>

                        </div>

                        <div class="col-12 d-md-none d-block">
                          <hr class=" elevation-2 d-md-none d-block mt-4">
                          </hr>
                        </div>

                        <div class="col-md-5 col-sm-12 text-center mt-3">
                          <img src="Assets/img/flavio_professor.jpg" alt="user-avatar"
                            class="img-circle elevation-2 img-fluid">
                        </div>

                      </div>

                    </div>

                    <div class="card-footer mb-0"
                      style="background: linear-gradient(120deg, #02395F, #14669C, #1c7fc2, #14669C, #034773)">
                    </div>

                  </div>

                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-stretch flex-column">

                  <div class="card bg-light d-flex flex-fill elevation-2">

                    <div class="card-header text-muted border-bottom-0 elevation-1"
                      style="background: linear-gradient(120deg, #f5faff, #FFFFFF);">
                      <h5> Deyvid Areas Silva </h5>
                    </div>

                    <div class="card-body" style="background: linear-gradient(120deg, #f5faff, #FFFFFF);">

                      <div class="row">

                        <div class="col-md-7 col-sm-12">

                          <ul class="ml-4 fa-ul text-muted mb-5">

                            <li class="medium mt-3"><span class="fa-li">
                                <i class="fas fa-user-graduate m-1"></i></span> Formando do ISERJ
                            </li>

                            <li class="medium mt-3"><span class="fa-li">
                                <i class="fas fa-envelope m-1"></i></span> deyvidsilva.areas@gmail.com
                            </li>

                            <li class="medium mt-3"><span class="fa-li">
                                <i class="fas fa-laptop-code m-1"></i></span> Desenvolvedor & Designer
                            </li>


                            <li class="medium mt-2"><span class="fa-li">

                                <form action="https://github.com/deyvidareas" target="_blank">

                                  <button class="btn btn-sm btn-primary motivo_visita mt-2 ml-2 elevation-2 mb-5">
                                    <i class="fab fa-github"></i> Github
                                  </button>

                                </form>

                            </li>

                          </ul>

                        </div>

                        <div class="col-12 d-md-none d-block">
                          <hr class=" elevation-2 d-md-none d-block mt-4">
                          </hr>
                        </div>

                        <div class="col-md-5 col-sm-12 text-center mt-3">
                          <img src="Assets/img/deyvid_desenvolvedor.jpg" alt="user-avatar"
                            class="img-circle elevation-2 img-fluid">
                        </div>

                      </div>

                    </div>

                    <div class="card-footer mb-0"
                      style="background: linear-gradient(120deg, #02395F, #14669C, #1c7fc2, #14669C, #034773)">
                    </div>

                  </div>

                </div>
             
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

</div>


<?php
  require_once 'View/Template/footer.php';
?>