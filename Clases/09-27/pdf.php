

<style type="text/css">	
	.color{
		color: #F3073F;
	}
</style>

<page>
	<h1>Mi primera pagina</h1>
</page>


<page backtop="20mm" backbottom="10mm" backleft="10mm" backright="10mm">
	
	<page_header>
		<p>Mi encabezado</p>
	</page_header>
	
	<page_footer>
		<p>Mi pie de página</p>
	</page_footer>

	<h1>Esto es mi segunda pagina</h1>
	<p>
		<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta quis architecto delectus fugiat sint cupiditate facere ad quas vel officia eos eaque laudantium quaerat distinctio magni, reprehenderit, commodi error eius!</span>
		<span>Sunt minima porro cumque nemo officia dolore, aperiam nulla saepe hic labore dolorum. Laborum dolores architecto unde sit beatae obcaecati incidunt fugiat? Quisquam veritatis ad, atque repudiandae similique reiciendis necessitatibus.</span>
		<span>Reiciendis nobis omnis adipisci, sequi voluptates suscipit deserunt, illum doloremque fuga sit iusto at officia ea pariatur esse voluptate sapiente illo. Voluptates officia inventore cumque amet quaerat molestiae rerum aliquid.</span>
		<span>Incidunt aperiam, dignissimos delectus deleniti excepturi ipsam adipisci possimus fugit maxime enim facere eaque sint et similique! Soluta corporis incidunt odit, autem ea aliquid sint veniam dolores debitis fugit omnis?</span>
		<span>Laudantium, veritatis, quam. Minima dolor, cupiditate voluptas, odit distinctio quia enim inventore doloribus incidunt deserunt! Fugiat incidunt accusantium quibusdam fuga culpa, ipsa nulla, voluptatem, delectus placeat mollitia consequuntur cum expedita!</span>
	</p>

	<?php 
		for ($i=0; $i < 10; $i++) { 
			echo "<p class='color'><h2>Nueva linea ".$i."</h2></p>";
		}

		$a = 6;
		$arreglo = ['manzana', 'pera'];
	 ?>

	 <?php if ($a > 5): ?>
	 	<h1 style="color: yellow;"> A es mayor a 5</h1>
	 <?php else: ?>
	 	<h1 style="color: blue;"> A no es mayor a 5</h1>
	 <?php endif ?>


	 <?php foreach ($arreglo as $key => $value): ?>
	 	<p>Mi fruta es: <?php echo $value; ?></p>
	 <?php endforeach ?>
</page>