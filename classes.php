<?php
class connect{
  function connect($host,$user,$pass){
    $connect = mysqli_connect($host,$user,$pass);
    if(!$connect){
      echo "ERROR: No se pudo conectar con la base de datos";
    }
  }
}
 ?>
