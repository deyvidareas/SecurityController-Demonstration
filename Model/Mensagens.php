<?php
	
	class Mensagens
	{

		public static function setMsg($text, $type)
		{

			//$_SESSION[$type] = $text;

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
				echo '<div class="alert alert-primary alert-dismissible rounded border-primary" id="alertMsg"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> '.$_SESSION['warningMsg'].'</div>';
				unset($_SESSION['warningMsg']);
			endif;


			if (isset($_SESSION['successMsg'])) :
				echo '<div class="alert alert-success alert-dismissible rounded border-success" id="alertMsg"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$_SESSION['successMsg'].'</div>';
				unset($_SESSION['successMsg']);
			endif;

		}

	}