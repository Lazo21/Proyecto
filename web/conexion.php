<?php
    $servername = "localhost";
    $database = "bd_belen";
    $username = "root";
    $password = "jmbc123456";
// Creamos la conexion
    $conn = mysqli_connect($servername, $username, $password, $database);
// Probamos la conexion
    if (!$conn) {
    die("La conexcion ha fallado: " . mysqli_connect_error());
    }
    echo "Conexion exitosa";
    mysqli_close($conn);
?>