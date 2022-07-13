<?php


     $user = "root";
     $pass = "";
     $server = "localhost";
     $con = mysqli_connect($server , $user , $pass);

  
     if(!$con)
     {
        echo "Error al realizar la conexion".mysql_connect_error();
     }
     
     echo "se realizo correctamente la conexion";


?>
