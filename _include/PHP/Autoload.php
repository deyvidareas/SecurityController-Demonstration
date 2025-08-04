<?php

  /** Configuração para: Autoload */
  function Autoload($class_name) {

    $extension =  spl_autoload_extensions();
    // Class directories
    $directorys = array (
      ROOT_URL.'Model/',
      ROOT_URL.'Controller/',
      ROOT_URL.'Helpers/',
      INCLUDES
    );
    
    // Para cada diretório
    foreach($directorys as $directory) {
        // Verifica se o arquivo existe
      if(file_exists($directory.$class_name.$extension)) {
        require_once $directory.$class_name.$extension;
        // Importa a classe apenas uma vez. Ao encontrar a classe, retornar.
        return;
      }
    }
  }    
  
  spl_autoload_extensions('.php');
  spl_autoload_register('Autoload');
  define('URL_ATUAL', Sistema::urlAtual(PATH));

