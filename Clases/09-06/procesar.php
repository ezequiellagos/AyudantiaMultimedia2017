<?php 


function guardarFormularioAlumno($nombre, $apellido, $rut)
{	
	require 'conexion.php';
	$sql = "INSERT INTO alumno(nombre, apellido, rut) VALUES(?,?,?)";
	$smt = $conn->prepare($sql);
	$smt->bindParam(1, $nombre);
	$smt->bindParam(2, $apellido);
	$smt->bindParam(3, $rut);
	$smt->execute();
	$conn = null;
}

function guardarFormularioRamo($nombre_ramo, $nota, $rut)
{	
	require 'conexion.php';
	$sql = "INSERT INTO ramo(nombre_ramo, nota, rut) VALUES(?,?,?)";
	$smt = $conn->prepare($sql);
	$smt->bindParam(1, $nombre_ramo);
	$smt->bindParam(2, $nota);
	$smt->bindParam(3, $rut);
	$smt->execute();
	$conn = null;
}


if(isset($_REQUEST['alumno_formulario'])){
	$nombre = $_REQUEST['nombre'];
	$apellido = $_REQUEST['apellido'];
	$rut = $_REQUEST['rut'];

	guardarFormularioAlumno($nombre, $apellido, $rut);
}

if(isset($_REQUEST['ramo_formulario'])){
	$ramo = $_REQUEST['ramo'];
	$nota = $_REQUEST['nota'];
	$rut = $_REQUEST['rut'];
	guardarFormularioRamo($ramo, $nota, $rut);
}

 ?>