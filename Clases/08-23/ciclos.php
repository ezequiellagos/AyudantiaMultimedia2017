<?php 

	// for ($i=0; $i < 5; $i++) { 
	// 	echo "Hola Mundo";
	// 	echo "<br>";
	// }

	// $i = 0;
	// while ($i <= 5) {
	// 	echo "Hola Mundo";
	// 	echo "<br>";
	// 	$i++;
	// }

	$i = ['rojo', 'amarillo', 'verde'];

	echo "<pre>";
	print_r($i);
	echo "</pre>";

	foreach ($i as $key => $value) {
		echo "Posicion ".$key." Mi valor es: ".$value;
		echo "<br>";
	}

 ?>