<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<button onclick="ejecutarAjax('upla')">
		Presioname
	</button>
	<br>
	<div id="resultado"></div>


	<script src="js/jquery-3.2.1.min.js"></script>

	<script>
		function ejecutarAjax(universidad) {
			$.ajax({
				url: 'procesar.php',
				method: "GET",
				data: {param1: 'value1', param2: universidad},
				beforeSend: function() {
					// $( "#resultado" ).html('');
					// $( "#resultado" ).append( "Enviando");
				},
			})
			.done(function( dattaaaaa ) {
				// $( "#resultado" ).html('');
				$( "#resultado" ).append( dattaaaaa );
				// if (dattaaaaa == '1') {
				// 	alert("si es la upla");
				// 	alert(dattaaaaa);
				// }else{
				// 	alert("esto no es la upla!!!!!!");
				// 	alert(dattaaaaa);
				// }

			})
			.fail(function() {
				$( "#resultado" ).html('');
				$( "#resultado" ).append( "<span>Error</span>");
			})
			

			
		}
	</script>
</body>
</html>