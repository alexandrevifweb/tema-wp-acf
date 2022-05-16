<?php 
	// Template Name: Início
	
	$titulo = get_field("titulo");
	$paragrafo= get_field("paragrafo");
	$link = get_field("link");
	
	$tituloPintura = get_field("tituloPintura");
	$textoPintura = get_field("textoPintura");

	$tituloParede = get_field("tituloParede");
	$textoParede = get_field("textoParede");
	
	$tituloAulas = get_field("tituloAulas");
	$textoAulas = get_field("textoAulas");
	
	get_header();
	
	

?>
<section >
	<div class="container py-5">
		<div class="row">
			<div class="col">
				<h2> <?php echo $titulo; ?></h2>
				
				<p class="pt-2"> <?php echo $paragrafo; ?> </p>
				
				<button class="btn btn-primary pt-2"><?php echo $link; ?></button>
			</div>
			
		</div>
		
	</div>
</section>



<section >
	<div class="container py-5">
		<div class="row">
			<div class="col">
				<div class="card bg-dark text-white">
				  <img src="https://images.unsplash.com/photo-1624106784587-facb5dcfef45?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" class="card-img" alt="...">
				  <div class="card-img-overlay">
					<h5 class="card-title"><?php echo $tituloPintura; ?></h5>
					<p class="card-text text-white"><?php echo $textoPintura; ?></p>
				  </div>
				</div>
			</div>
			<div class="col">
				<div class="card bg-dark text-white">
				  <img src="https://images.unsplash.com/photo-1622737133809-d95047b9e673?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" class="card-img" alt="...">
				  <div class="card-img-overlay">
					<h5 class="card-title"><?php echo $tituloParede; ?></h5>
					<p class="card-text text-white"><?php echo $textoParede; ?></p>
					
				  </div>
				</div>
			</div>
			<div class="col">
				<div class="card bg-dark text-white">
				  <img src="https://images.unsplash.com/photo-1627163439097-373d08b797d1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" class="card-img" alt="...">
				  <div class="card-img-overlay">
					<h5 class="card-title"><?php echo $tituloAulas; ?></h5>
					<p class="card-text text-white"><?php echo $textoAulas; ?></p>
				  </div>
				</div>
			</div>
			
		</div>
		
	</div>
</section>





<?php 
	get_footer();
?>