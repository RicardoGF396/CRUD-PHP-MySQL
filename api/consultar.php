<?php 

    //Servidor
    //name
    //password
    //DB
    //http://localhost/Sistema_PHP/api/consultar.php/
    $conexion = new mysqli('localhost', 'root', '', "sistema") or die ("not connected".mysqli_connect_error()); 
    $sql = "SELECT * FROM `clientes`;";

    //Ejecuta consulta a base de datos
    $result = mysqli_query($conexion, $sql);

    $clientes = array();

    //Recorre cada fila que va devolviendo
    while($row = mysqli_fetch_array($result)){
        array_push($clientes, $row);
    }

    //Convertimos mi arreglo en formato JSON
    echo json_encode($clientes);

    mysqli_free_result($result);
    mysqli_close($conexion)

?>