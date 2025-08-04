<?php
	
	class Mensagens
	{

		public static function setMsg($text, $type)
		{

			if ($type == 'errorMsg') :
				$_SESSION['errorMsg'] = $text;
			endif;

			if ($type == 'successMsg') :
				$_SESSION['successMsg'] = $text;
			endif;

			if ($type == 'warningMsg') :
				$_SESSION['warningMsg'] = $text;
			endif;			

		}

		public static function display ()
		{

			if (isset($_SESSION['errorMsg'])) :
				echo '<div class="alert alert-danger alert-dismissible rounded border-danger" id="alertMsg"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> '.$_SESSION['errorMsg'].'</div>';
				unset($_SESSION['errorMsg']);
			endif;

			if (isset($_SESSION['warningMsg'])) :
				echo '<div class="alert alert-warning alert-dismissible rounded border-warning" id="alertMsg"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> '.$_SESSION['warningMsg'].'</div>';
				unset($_SESSION['warningMsg']);
			endif;

			if (isset($_SESSION['successMsg'])) :
				echo '<div class="alert alert-success alert-dismissible rounded border-success" id="alertMsg"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$_SESSION['successMsg'].'</div>';
				unset($_SESSION['successMsg']);
			endif;

		}

		public static function displayAlert ()
		{

			if (isset($_SESSION['errorMsg'])) :
				echo '<script> $(document).ready(function () {mostraMensagem("'.$_SESSION['ERRORFILL'].'", "ERRORFILL");}); </script>';
				unset($_SESSION['ERRORFILL']);
			endif;

			if (isset($_SESSION['warningMsg'])) :
				echo '<script> $(document).ready(function () {mostraMensagem("'.$_SESSION['warningMsg'].'", "warningMsg");}); </script>';
				unset($_SESSION['warningMsg']);
			endif;

			if (isset($_SESSION['successMsg'])) :
				echo '<script> $(document).ready(function () {mostraMensagem("'.$_SESSION['successMsg'].'", "successMsg");}); </script>';
				unset($_SESSION['successMsg']);
			endif;			

		}		

		public static function displayError ()
		{
            if (isset($_SESSION['STATUS'])) {
                if ($_SESSION['STATUS'] == 'ERRORFILL') {
                    echo '
								<div class="alert alert-warning" role="alert">
										Preencha todos os campos.
								</div>
						';
                    $_SESSION['STATUS'] = 'CLEAR';
                } elseif ($_SESSION['STATUS'] == 'SUCCESS') {
                    echo '
								<div class="alert alert-success" role="alert">
										Inserido com sucesso!
								</div>
						';
                    $_SESSION['STATUS'] = 'CLEAR';
                }
            }
    }		
				
	}