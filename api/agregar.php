<?php 
    //Servidor
    //name
    //password
    //DB
    //http://localhost/Sistema_PHP/api/index.php/?nombre=%22Bruno%22&apellido=%22D%C3%ADaz%22&email=%22brunod@gmail.com%22&telefono=%224778521320%22&detalle=%22Prueba%20URL%22
    $conexion = new mysqli('localhost', 'root', '', "sistema") or die ("not connected".mysqli_connect_error());

    if(isset($_GET['nombre'])){
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $email = $_GET['email'];
        $telefono = $_GET['telefono'];
        $detalle = $_GET['detalle'];

    $sql = "INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `email`, `telefono`, `detalle`) 
    VALUES (NULL, '$nombre', '$apellido', '$email', '$telefono', '$detalle');";

    $query = mysqli_query($conexion, $sql);
    if($query){
        echo "Nueva fila insertada";
    }else{
        echo mysqli_error($conexion);
    }
 }
?>