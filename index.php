<?php
require_once 'View/Template/header.php';
?>

<?php if ($_SESSION['mudouSenha'] == 0) { ?>
     
<script>

    $(window).on('load',function(){
        $('#modal-mudarSenha').modal('show');
    });

</script>

<?php } ?>

<div class="modal hide fade" id="modal-mudarSenha">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <form action="./Controller/UserController.php" method="POST" autocomplete="off">

        <input type="hidden" name="mudarSenha" value="true">
        <input type="hidden" name="vURL" value="<?php echo URL_ATUAL ?>">

        <?php Mensagens::display() ?>

        <div class="modal-header">
          <h4 class="modal-title"> Mude sua Senha:  </h4>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

        </div>

        <div class="modal-body">

          <div class="row">

            <div class="col-12">

              <div class="form-group">
                <input class="form-control" placeholder="Nova senha:" id="password" type="password">
                <span class="lnr lnr-eye"></span>
              </div>

              <div class="form-group">         
                <input class="form-control" placeholder="Confirmar nova senha:" name="novaSenha" id="confirm_password" type="password">
              </div>

            </div>

          </div>

        </div>

        <div class="modal-footer justify-content-between">
          <button type="submit" class="col-2 btn btn-sm btn-primary" id="BtnConfirm"> Confirmar </button>
        </div>

      </form>

    </div>
  </div>
</div>

<script>

  

</script>

      <?php
        if ($_SESSION['tipoUsuario'] == 'funcionarioPortaria') {
          require_once 'View/home/homePortaria.php';
        } else {
          require_once 'View/home/homeAdministrador.php';
        }
      ?>

 
<?php
  require_once 'View/Template/footer.php';
?>

<?php
if (session_status() === PHP_SESSION_NONE) {
    // Só modifique configurações de sessão antes de iniciar a sessão!
    ini_set('session.cookie_httponly', 1);
    ini_set('session.use_strict_mode', 1);
    session_start();
}
?>