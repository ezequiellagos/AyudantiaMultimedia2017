<?php 

$variable = "Hola Mundo!";

$alumnos = ['Cristobal' => 5.2, 
			'Diego' => 5.5,
			'Felipe' => 6.5];


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<h1><?php echo $variable; ?></h1>

 	<?php 
 		for ($i=0; $i < 5; $i++) { 
 			echo "<h1>".$variable."</h1>";
 		}
 	 ?>

 	 <table style="border: solid 1px #000;">
 	 	<tr>
 	 		<td>Alumno</td>
 	 		<td>Nota</td>
 	 	</tr>
 	 	<?php foreach ($alumnos as $key => $value): ?>
 	 		<tr>
 	 			<td><?php echo $key; ?></td>
 	 			<td><?php echo $value; ?></td>
 	 		</tr>
 	 	<?php endforeach ?>
 	 </table>
 </body>
 </html>