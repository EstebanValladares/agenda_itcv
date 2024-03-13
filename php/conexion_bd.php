<?php
$servername = "127.0.0.1"; 
$username = "root";
$password = "hola123";
$dbname = "prueba1";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_errno) {
    die("Error de conexión: " . $conn->connect_errno);
}else {
    echo "Conexión exitosa";

}

$conn->close();
?>