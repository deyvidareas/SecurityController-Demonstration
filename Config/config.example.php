<?php
  define('TEMPOEX', 5 * 60); /* Tempo de expiração da sessão em minutos*/ 
  ini_set('session.gc_maxlifetime', TEMPOEX);
  header_remove('X-Powered-By');
  session_start();

  ############################ CONFIGURAÇÕES GLOBAIS ############################
  /** CONFIGURAÇÃO PARA: NIVEL DE REPORT DE ERRO */
  define('DEVELOPMENT_MODE', false);

  /** CONFIGURAÇÃO PARA: BANCO DE DADOS PRODUÇÃO */

    define('DB_DRIVE', 'mysql');
    define('DB_HOSTNAME', 'localhost'); // ou 'db'
    define('DB_DATABASE', 'sua_base_aqui');
    define('DB_USERNAME', 'seu_usuario_aqui');
    define('DB_PASSWORD', 'sua_senha_aqui');
    define('DB_CHARSET', 'utf8');

    if (DEVELOPMENT_MODE) {
      error_reporting(E_ALL);
      ini_set('display_errors', 1);
      ini_set('log_errors', 1);
      ini_set('error_log', 'Infra/php-error-'.date('d-m-Y', time()).'.log');
    } else {
      error_reporting(E_ALL);
      ini_set('display_errors', 0);
      ini_set('log_errors', 1);
      ini_set('error_log', 'Infra/php-error-'.date('d-m-Y', time()).'.log');
    }
  

  $folder = '';
  if ($_SERVER['SERVER_NAME'] == 'localhost') {
      $folder = ''; // vazio, pois no container o root já é SecurityController-ISERJ
  } else {
      $folder = ''; // também vazio para produção, se o root for SecurityController-ISERJ
  }

  define('ASSETS_PATH', 'http://'.$_SERVER['SERVER_NAME'].'/'.$folder.'/_include/Template/AdminLTE_Bootstrap_v4');
  define('LIBRARIES', 'http://'.$_SERVER['SERVER_NAME'].'/'.$folder.'/_include/Libraries');
  define('ICON', 'http://'.$_SERVER['SERVER_NAME'].'/'.$folder.'/_include/Icones/boxes');
  define('SHORT_NAME_APP', 'CI');
  define('URL', sizeof(explode('/', $_SERVER['REQUEST_URI']))-1);
  define('PATH', $_SERVER['REQUEST_URI']);
  define('ROOT_URL', $_SERVER['DOCUMENT_ROOT'].'/'.$folder.'/');
  define('INCLUDES', $_SERVER['DOCUMENT_ROOT'].'/_include/PHP/');
  define('BASE_URI', 'http://'.$_SERVER['SERVER_NAME'].'/'.$folder);

  /** ################################################################################ */
  # Inclusão do arquivo responsável pelo Autoload
  # Pode ser transformado numa classe, e aqui chamado um método estático

  require_once INCLUDES.'Autoload.php';

  define('URL_ATUAL', Sistema::urlAtual(PATH));

  # CONFIGURAÇÃO DE HORA
  setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
  date_default_timezone_set('America/Sao_Paulo');
  $dataAtual = strftime('%A, %d de %B de %Y', strtotime('now'));
