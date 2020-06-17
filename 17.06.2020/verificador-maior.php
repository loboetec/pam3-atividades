<?php

  $numero1 = $_REQUEST["numero1"] ;
  $numero2 = $_REQUEST["numero2"] ;

  $maior = "" ;
  $menor = "" ;
  $msg   = "" ;

  if( $numero1 > $numero2 ){
    $msg   = "maior é " . $numero1 ;
    $maior = $numero1 ;
    $menor = $numero2 ;
  }elseif( $numero1 == $numero2 ){
    $msg   = "ambos são iguais" ;
    $maior = "ambos são iguais" ;
    $menor = "ambos são iguais" ;
  }else{
    $msg   = "maior é " . $numero2 ;
    $maior = $numero2 ;
    $menor = $numero1 ;
  }

  $jsonRetorno["operacao"] = "maior" ;
  $jsonRetorno["numero1"]  = $numero1 ;
  $jsonRetorno["numero2"]  = $numero2 ;
  $jsonRetorno["maior"]    = $maior ;
  $jsonRetorno["menor"]    = $menor ;
  $jsonRetorno["msg"]      = $msg ;

  echo json_encode( $jsonRetorno ) ;
  
?>