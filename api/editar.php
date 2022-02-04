<?php 

    //Servidor
    //name
    //password
    //DB
    //http://localhost/Sistema_PHP/api/consultar.php/
    $conexion = new mysqli('localhost', 'root', '', "sistema") or die ("not connected".mysqli_connect_error()); 
    
    if (isset($_GET['nombre'])) {
        $id = $_GET['id'];
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $email = $_GET['email'];
        $telefono = $_GET['telefono'];
        $detalle = $_GET['detalle'];
    
        $sql = "UPDATE `clientes` SET `nombre` = '$nombre', `apellido` = '$apellido', `email` = '$email', `telefono` = '$telefono', `detalle` = '$detalle' WHERE `clientes`.`id` = $id;";
    
        $query = mysqli_query($conexion, $sql);
        if($query){
          echo"1 row updated";
        }else{
          echo mysqli_error($conexion);
        }
      }

?>