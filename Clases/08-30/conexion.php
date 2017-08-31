<?php 

$usuario = "root";
$clave = "";
$db_nombre = "ayudantia_multimedia";
$host = "localhost";


$conn = new PDO("mysql:host=$host;dbname=$db_nombre", $usuario, $clave);


//$conn = null; cerrar conexion
 ?>