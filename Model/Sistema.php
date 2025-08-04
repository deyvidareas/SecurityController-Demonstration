<?php

  class Sistema
  {

    public static function urlAtual($url)
    {

      $url = explode('/', $url);
      return end($url);
  
    }

    public static function Print_r($var)
    {
      echo '<pre>';
      print_r($var);
      echo '</pre>';
    }    

    public static function Debug($var)
    {
      echo '<pre>';
      print_r($var);
      echo '</pre>';
      exit();
    }   

    public static function formatDate($data)
    {

      if (is_null($data) || empty($data) || $data == '31/12/1969') :
        $data =  null;
      else :
        $data = date('d/m/Y', strtotime($data));
      endif;

      return $data;
  
    }   
    
    public static function formatDateTime($data)
    {

      return $data != '' ? date('d/m/Y G:i:s', strtotime($data)) : '';
  
    }     
    
    public static function formatMoney($valor)
    {
      if ($valor != '') {
        $valor = number_format($valor, 2, ',', '.');
        return $valor;
      }

    }

    public static function convertDateBRtoUS ($date)
    {

      if (empty($date) || is_null($date)) {
        $date = '';
      } else {
        $date = implode('-', array_reverse(explode('/', $date)));  
      }
      
      return $date;

    }
    
    public static function format_number ($valor)
    {

      $valor = $valor == '' ? '-' : number_format($valor, 2, ',', '.');
      return $valor;
    }        

    public static function urlAtiva($url, $link)
    {

      $resultado = ($url == $link) ? 'menu-open' : NULL ;
      echo $resultado;
  
    } 

    public static function subMenuAtivo($url, $link)
    {

      $resultado = ($url == $link) ? 'active' : NULL ;
      echo $resultado;

    } 

    public static function converteMatrizParaVetor($array)
    {
      if (!is_array($array)) { 
        return FALSE; 
      } 

      $result = array(); 
      foreach ($array as $key => $value) { 
        if (is_array($value)) { 
          $result = array_merge($result, self::array_flatten($value)); 
        } 
        else { 
          $result[$key] = $value; 
        } 
      } 
      return $result; 
    }    

    public static function array_flatten($array)
    { 

      $result = array(); 

      foreach($array as $arr) {
        $result = array_merge($result, $arr);
      }

      return $result; 
    }      


  }
