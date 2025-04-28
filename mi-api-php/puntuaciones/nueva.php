<?php
$con = new mysqli('localhost', 'root', '', 'puntuaciones');
if ($con->connect_errno) {
    echo 'Error al conectar base de datos: ', $con->connect_error;
    exit();
}

$puntos = $_GET['puntos'];
$nombre = htmlspecialchars($_GET['nombre']);
$fecha = $_GET['fecha'];
$sql = $con->prepare('INSERT INTO puntuaciones VALUES (null, ?, ?, ?)');
$sql->bind_param('isi', $puntos, $nombre, $fecha);
$sql->execute();
echo "OK\n";
$con->close();
?>
